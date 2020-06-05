//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * copy file to file
 * \param[in] source name of source file
 * \param[in] target name of target file
 * \param[in] flag_overwrite flag of overwriting target file
 * \return status
 */
function libcore__file_copy($source, $target, $flag_overwrite = false)
{
/*
	$rc = @stat($source);
	if ($rc === false) return false;
	$source_stat = $rc;
	$size = $source_stat['size'];


	if ($flag_overwrite === false)
	{
		$rc = @file_exists($target);
		if ($rc !== false) return false;
	}


	$rc = libcore__make_dir($target);
	if ($rc->is_ok() === false) return false;


	$rc = @fopen($source, 'rb');
	if ($rc === false) return false;
	$source_handle = $rc;


	$rc = @fopen($target.".tmp", 'wb');
	if ($rc === false) return false;
	$target_handle = $rc;


	$rc = @file_exists($target.".tmp");
	if ($rc === false) return false;


	$chunk_size = 4096;
	$rc = libcore__blk_copy($source_handle, $target_handle, $size, $chunk_size);
	if ($rc === false) return false;


	$rc = @fflush($target_handle);
	if ($rc === false) return false;


	$rc = @fclose($target_handle);
	if ($rc === false) return false;


	$rc = @fclose($source_handle);
	if ($rc === false) return false;


	$rc = @rename($target.".tmp", $target);
	if ($rc === false) return false;


	return true;
*/


	$mode = 1;
	if ($flag_overwrite === false)
	{
		$mode = 0;
	}

/**
 * copy file to file
 * \param[in] source name of source file
 * \param[in] offset offset copy block from source file
 * \param[in] limit  limit  copy block from source file. if limit is -1 then limit = size of file - offset
 * \param[in] target name of target file
 * \param[in] mode mode of copy: 0 - file make only, 1 - file make or owerwrite, 2 - file append only, 3 - file make or append
 * \return status
 */
	$rc = libcore__file_copy2($source, 0, -1, $target, $mode);
	if ($rc->is_ok() === false) return false;

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
