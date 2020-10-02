//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * add string to file
 * \param[in] filename name of file
 * \param[in] str string
 * \return status
 */
function libcore__log($filename, $str)
{
	$rc = libcore__make_dir($filename);
	if ($rc->is_ok() === false) return false;


	$handle = false;
	for (;;)
	{
		$rc = touch($filename);
		if ($rc === false) return false;


		$rc = @fopen($filename, 'ab');
		if ($rc === false) return false;
		$handle = $rc;


		if (@flock($handle, LOCK_EX) === true) // file exclusive lock
		{
			break;
		}


		$rc = @fclose($handle);
		if ($rc === false) return false;


		usleep(100);
	}


	$rc = libcore__blk_write($handle, $str);
	if ($rc === false)
	{
		return false;
	}


	$rc = @fflush($handle);
	if ($rc === false) return false;


	$rc = @flock($handle, LOCK_UN); // file unlock
	if ($rc === false) return false;


	$rc = @fclose($handle);
	if ($rc === false) return false;


	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
