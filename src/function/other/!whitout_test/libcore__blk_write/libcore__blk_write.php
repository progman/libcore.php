//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * write block to file
 * \param[in] handle handle of file
 * \param[in] str str for writing
 * \return write status
 */
function libcore__blk_write($handle, $str)
{
	$str_size = strlen($str);
	$str_offset = 0;


// maybe we read all in first time
	if ($str_size === $str_offset) return true;
	$rc = @fwrite($handle, $str); // write without substr
	if ($rc === false) return false;
	$str_offset += $rc;


// it if we did not read all in first time
	for (;;)
	{
		if ($str_size === $str_offset) break;
		$rc = @fwrite($handle, substr($str, $str_offset));
		if ($rc === false) return false;
		$str_offset += $rc;
	}


	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
