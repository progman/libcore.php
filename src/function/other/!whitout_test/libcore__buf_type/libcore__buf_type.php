//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get buf type
 * \param[in] buf buffer
 * \return buffer type
 */
function libcore__buf_type($buffer)
{
	if (function_exists('finfo_open') === false)
	{
		return false;
	}


	$finfo = finfo_open();


	if (is_resource($finfo) === false)
	{
		return false;
	}


	$output = finfo_buffer($finfo, $buffer, FILEINFO_MIME_TYPE);


	finfo_close($finfo);


/*
	$rc = @file_exists($filename);
	if ($rc === false) return false;

	$command = "file -b --mime-type ".$filename;
	$output_array = '';
	$return_var = 0;
	$output = @exec($command, $output_array, $return_var);

	if ($return_var !== 0)
	{
		return false;
	}
*/


	return $output;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
