//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get file type
 * \param[in] filename name of file
 * \return file type
 */
function libcore__file_type($filename)
{
	$rc = @file_exists($filename);
	if ($rc === false) return false;


	if (function_exists('finfo_open') === false)
	{
		return mime_content_type($filename);
	}


	$finfo = finfo_open();


	if (is_resource($finfo) === false)
	{
		return false;
	}


	$output = finfo_file($finfo, $filename, FILEINFO_MIME_TYPE);


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
