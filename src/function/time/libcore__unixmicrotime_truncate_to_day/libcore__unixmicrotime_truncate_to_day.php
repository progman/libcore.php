//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to unixmicrotime (truncate to day), from "1528799349000000" to "1528761600000000"
 * \param[in] unixmicrotime time in seconds like 1528799349000000 it is 2018-06-12 13:29:09.000000
 * \return result truncated unixmicrotime or FALSE if args are bad
 */
function libcore__unixmicrotime_truncate_to_day($unixmicrotime)
{
	settype($unixmicrotime, "string");


	$rc = libcore__is_unixmicrotime($unixmicrotime);
	if ($rc === false)
	{
		return false;
	}


	$rc = libcore__unixmicrotime_to_unixtime($unixmicrotime);
	if ($rc === false)
	{
		return false;
	}
	$unixtime = $rc;


	$rc = libcore__unixtime_truncate_to_day($unixtime);
	if ($rc === false)
	{
		return false;
	}
	$unixtime = $rc;


	$rc = libcore__unixtime_to_unixmicrotime($unixtime);
	if ($rc === false)
	{
		return false;
	}
	$unixmicrotime = $rc;


	return $unixmicrotime;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
