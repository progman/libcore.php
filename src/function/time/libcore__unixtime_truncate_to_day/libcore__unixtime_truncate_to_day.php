//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixtime to unixtime (truncate to day), from "1528799349" to "1528761600"
 * \param[in] unixtime time in seconds like 1528799349 it is 2018-06-12 13:29:09
 * \return result truncated unixtime or FALSE if args are bad
 */
function libcore__unixtime_truncate_to_day($unixtime)
{
	settype($unixtime, "string");


	$rc = libcore__is_unixtime($unixtime);
	if ($rc === false)
	{
		return false;
	}


//	echo "unixtime: ".$unixtime."\n";
	$year   = gmdate("Y", $unixtime);
	$month  = gmdate("m", $unixtime);
	$day    = gmdate("d", $unixtime);
	$hour   = 0;
	$minute = 0;
	$second = 0;
//	echo "year : ".$year."\n";
//	echo "month: ".$month."\n";
//	echo "day  : ".$day."\n";


	$rc = gmmktime($hour, $minute, $second, $month, $day, $year);
	if ($rc === false)
	{
		return false;
	}
	$unixtime = $rc;
//	echo "unixtime: ".$unixtime."\n";


	return $unixtime;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
