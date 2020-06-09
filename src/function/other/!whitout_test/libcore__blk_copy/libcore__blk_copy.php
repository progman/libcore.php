//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * read block from source file and write block to target file
 * \param[in] source_handle handle of source file
 * \param[in] target_handle handle of target file
 * \param[in] size size of block
 * \param[in] chunk_size size of chunk
 * \return copy status
 */
function libcore__blk_copy($source_handle, $target_handle, $size, $chunk_size = 4096)
{
	for (;;)
	{
		if ($size === 0) break;


		if ($size < $chunk_size)
		{
			$chunk_size = $size;
		}


		$rc = libcore__blk_read($source_handle, $chunk_size);
		if ($rc === false) return false;
		$chunk = $rc;


		$rc = libcore__blk_write($target_handle, $chunk);
		if ($rc === false) return false;


		$size -= $chunk_size;
	}


	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
