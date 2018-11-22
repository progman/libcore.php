//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get unixtime
 * \param[in] flag_utc use UTC timezone
 * \return unixtime
 */
function libcore__get_unixtime($flag_utc = false)
{
	$unixtime = "0000000000";


	$tz = date_default_timezone_get();
//echo "tz:".$tz."\n";

	if ($flag_utc !== false)
	{
		if (date_default_timezone_set("UTC") === false)
		{
			return $unixtime;
		}
	}


	$unixtime = time();


	if ($flag_utc !== false)
	{
		if (date_default_timezone_set($tz) === false)
		{
			return $unixtime;
		}
	}


	return $unixtime;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//