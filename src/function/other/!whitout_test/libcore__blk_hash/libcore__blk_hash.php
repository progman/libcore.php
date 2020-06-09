//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * read block from file
 * \param[in] handle handle of file
 * \param[in] size size of block
 * \param[in] algo algo of hash
 * \param[in] chunk_size size of chunk
 * \return hash of block or error
 */
function libcore__blk_hash($handle, $size, $algo = "sha3-256", $chunk_size = 4096)
{
	$algos = hash_algos();
	$algos_size = count($algos);

	$flag_found = false;
	for ($i=0; $i < $algos_size; $i++)
	{
		if (strcmp($algos[$i], $algo) === 0)
		{
			$flag_found = true;
			break;
		}
	}
	if ($flag_found === false)
	{
		return false;
	}


	$ctx = hash_init($algo);


	for (;;)
	{
		if ($size === 0) break;


		if ($size < $chunk_size)
		{
			$chunk_size = $size;
		}


		$rc = libcore__blk_read($handle, $chunk_size);
		if ($rc === false) return false;
		$chunk = $rc;


		hash_update($ctx, $chunk);


		$size -= $chunk_size;
	}


	return hash_final($ctx);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
