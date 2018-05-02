//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * write file from string
 * \param[in] filename name of file
 * \param[in] str string
 * \return status
 */
function libcore__file_set($filename, $str)
{
	$rc = libcore__make_dir($filename);
	if ($rc->is_ok() === false) return false;


	$rc = @fopen($filename, 'wb');
	if ($rc === false) return false;
	$handle = $rc;


	for (;;)
	{
		if (@flock($handle, LOCK_EX) === false) // set exclusive lock on file
		{
			if (@file_exists($filename) === false)
			{
				$handle = @fopen($filename, 'wb');
				if ($handle === false)
				{
					return false;
				}
			}

			usleep(100);
			continue;
		}

		break;
	}


	$rc = libcore__blk_write($handle, $str);
	if ($rc === false) return false;


	$rc = @fflush($handle);
	if ($rc === false) return false;

	$rc = @flock($handle, LOCK_UN); // file unlock
	if ($rc === false) return false;

	$rc = @fclose($handle);
	if ($rc === false) return false;


	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
