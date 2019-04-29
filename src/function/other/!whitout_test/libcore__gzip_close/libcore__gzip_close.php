//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * close to gzip page
 * \param[in] flag_gzip is page gziping
 * \return gziped page
 */
function libcore__gzip_close($flag_gzip)
{
	if (libcore__is_flag_set($flag_gzip) === false)
	{
		return;
	}


	ob_implicit_flush(1);
	$contents      = ob_get_contents();
	$contents_size = ob_get_length();
	ob_end_clean();

	$contents = gzencode ($contents, 9);
	$contents_size_new = strlen($contents);


	header("Vary: Accept-Encoding");
	header("Content-Encoding: gzip");
	header("Content-Length: ".($contents_size_new));

	echo $contents;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
