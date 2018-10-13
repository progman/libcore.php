//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to day of week, from "1508150177310040" ("2017-10-16T10:36:17.31004+0000") to 1 (Monday, see flag_iso8601)
 * \param[in] unixmicrotime time in microseconds like 1508150177310040 it is 2017-10-16 13:36:17.31004
 * \param[in] flag_iso8601 flag of mode. when it's FALSE then using set (0 - sunday ... 6 - saturday), when it's TRUE then using set (1 - monday ... 7 - sunday)
 * \return result day of week or FALSE if args are bad
 */
function libcore__unixmicrotime_to_dayofweek($unixmicrotime, $flag_iso8601)
{
	settype($flag_iso8601, "boolean");


	$rc = libcore__unixmicrotime_to_unixtime($unixmicrotime);
	if ($rc === false)
	{
		return false;
	}
	$unixtime = $rc;


	$day_of_week = "0";
	if ($flag_iso8601 === false)
	{
		$day_of_week = date("w", $unixtime); // w Порядковый номер дня недели от 0 (воскресенье) до 6 (суббота)
	}
	else
	{
		$day_of_week = date("N", $unixtime); // N Порядковый номер дня недели в соответствии со стандартом ISO-8601 (добавлено в PHP 5.1.0) от 1 (понедельник) до 7 (воскресенье)
	}
	settype($day_of_week, "integer");


	return $day_of_week;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
