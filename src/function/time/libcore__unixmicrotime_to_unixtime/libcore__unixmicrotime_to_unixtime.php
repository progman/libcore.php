//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to unixtime, from "1528799349000000" to "1528799349"
 * \param[in] unixmicrotime time in microseconds like 1528799349000000 it is 2018-06-12 13:29:09.0
 * \return result day of week or FALSE if args are bad
 */
function libcore__unixmicrotime_to_unixtime($unixmicrotime)
{
	settype($unixmicrotime, "string");


	$rc = libcore__is_unixmicrotime($unixmicrotime);
	if ($rc === false)
	{
		return false;
	}


//	if (strlen($unixmicrotime) !== 16)
//	{
//		return false;
//	}


//	if (libcore__is_uint($unixmicrotime) === false)
//	{
//		return false;
//	}


	return substr($unixmicrotime, 0, strlen($unixmicrotime) - 6);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
