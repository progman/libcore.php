//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * copy file to file
 * \param[in] source name of source file
 * \param[in] offset offset copy block from source file
 * \param[in] limit  limit  copy block from source file. if limit is -1 then limit = size of file - offset
 * \param[in] target name of target file
 * \param[in] mode mode of copy: 0 - file make only, 1 - file make or owerwrite, 2 - file append only, 3 - file make or append
 * \return status
 */
function libcore__file_copy2($source, $offset, $limit, $target, $mode = 1)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	if ($limit === -1)
	{
		$rc = @stat($source);
		if ($rc === false) return false;
		$source_stat = $rc;
		$limit = $source_stat['size'] - $offset;
	}


	if
	(
		($mode !== 0) &&
		($mode !== 1) &&
		($mode !== 2) &&
		($mode !== 3)
	)
	{
		$result->set_err(1, "invalid mode");
		return $result;
	}


	$rc = @file_exists($target);
	if ($mode === 0)
	{
		if ($rc !== false)
		{
			$result->set_err(1, "file already exist but mode is 'make only'");
			return $result;
		}
	}
	if ($mode === 2)
	{
		if ($rc === false)
		{
			$result->set_err(1, "file is not exist but mode is 'append only'");
			return $result;
		}
	}


	$rc = @fopen($source, 'rb');
	if ($rc === false) return false;
	$source_handle = $rc;


	$rc = libcore__make_dir($target);
	if ($rc->is_ok() === false) return false;


	$target_handle = null;
	if (($mode === 0) || ($mode === 1))
	{
		$rc = @fopen($target.".tmp", 'wb'); // Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.
		if ($rc === false) return false;
		$target_handle = $rc;
	}
	if (($mode === 2) || ($mode === 3))
	{
		$rc = @fopen($target.".tmp", 'ab'); // Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
		if ($rc === false) return false;
		$target_handle = $rc;
	}


	$rc = @file_exists($target.".tmp");
	if ($rc === false) return false;


	$chunk_size = 4096;
	$rc = libcore__blk_copy($source_handle, $target_handle, $limit, $chunk_size);
	if ($rc === false) return false;


	$rc = @fflush($target_handle);
	if ($rc === false) return false;


	$rc = @fclose($target_handle);
	if ($rc === false) return false;


	$rc = @fclose($source_handle);
	if ($rc === false) return false;


	$rc = @rename($target.".tmp", $target);
	if ($rc === false) return false;


	$result->set_ok();
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
