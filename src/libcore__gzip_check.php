//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__gzip_check()
{
	$http_accept_encoding = libcore__get_var_str("HTTP_ACCEPT_ENCODING");


	if (strstr($http_accept_encoding, "gzip") === false)
	{
		return false;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
