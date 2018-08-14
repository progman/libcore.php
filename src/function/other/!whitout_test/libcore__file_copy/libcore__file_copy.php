//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * copy file to file
 * \param[in] source name of source file
 * \param[in] target name of target file
 * \param[in] flag_overwrite flag of overwriting target file
 * \return status
 */
function libcore__file_copy($source, $target, $flag_overwrite = false)
{
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
	for (;;)
	{
		if ($size < $chunk_size) $chunk_size = $size;


		$rc = libcore__blk_read($source_handle, $chunk_size);
		if ($rc === false) return false;
		$chunk = $rc;


		$rc = libcore__blk_write($target_handle, $chunk);
		if ($rc === false) return false;

		$size -= $chunk_size;

		if ($size === 0) break;
	}


	$rc = @fflush($target_handle);
	if ($rc === false) return false;

	$rc = @fclose($target_handle);
	if ($rc === false) return false;

	$rc = @fclose($source_handle);
	if ($rc === false) return false;


	$rc = @rename($target.".tmp", $target);
	if ($rc === false) return false;


	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
