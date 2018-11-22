//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixtime to unixmicrotime, from "1528799349" to "1528799349000000"
 * \param[in] unixtime time in seconds like 1528799349 it is 2018-06-12 13:29:09
 * \return result day of week or FALSE if args are bad
 */
function libcore__unixtime_to_unixmicrotime($unixtime)
{
	settype($unixtime, "string");


	if (strlen($unixtime) !== 10)
	{
		return false;
	}

	if (libcore__is_uint($unixtime) === false)
	{
		return false;
	}


	return $unixtime."000000";
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//