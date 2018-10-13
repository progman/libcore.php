//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get unixmicrotime
 * \param[in] flag_utc use UTC timezone
 * \return unixmicrotime
 */
function libcore__get_unixmicrotime($flag_utc = false)
{
	$unixmicrotime = "0000000000000000";


	$tz = date_default_timezone_get();
//echo "tz:".$tz."\n";

	if ($flag_utc !== false)
	{
		if (date_default_timezone_set("UTC") === false)
		{
			return $unixmicrotime;
		}
	}


	list($part2, $part1) = explode(" ", microtime());
//echo "part1:".$part1."\n";
//echo "part2:".$part2."\n";


	if ($flag_utc !== false)
	{
		if (date_default_timezone_set($tz) === false)
		{
			return $unixmicrotime;
		}
	}


	if (strlen($part2) != 10)
	{
		return $unixmicrotime;
	}
	if ($part2[0] != '0')
	{
		return $unixmicrotime;
	}
	if ($part2[1] != '.')
	{
		return $unixmicrotime;
	}


	$microsec = substr($part2, 2, 6);
//echo "microsec:".$microsec."\n";


	$unixmicrotime = $part1.$microsec;
//echo "unixmicrotime:".$unixmicrotime."\n";


	for (;;)
	{
		if (strlen($unixmicrotime) >= 16) break;
		$unixmicrotime = "0".$unixmicrotime;
	}
//echo "unixmicrotime:".$unixmicrotime."\n";


	return $unixmicrotime;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
