//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrointerval to human readable format, from "77310040" to "0 days 0 hours 1 mins 17 secs 310040 microseconds"
 * \param[in] unixmicrointerval interval time in microseconds like 77310040 it is "0 days 0 hours 1 mins 17 secs 310040 microseconds"
 * \return result human readable format like "0 days 0 hours 1 mins 17 secs 310040 microseconds"
 */
function libcore__unixmicrointerval_to_text($unixmicrointerval)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	settype($unixmicrointerval, "int");


	$sec  = 0;
	$min  = 0;
	$hour = 0;
	$day  = 0;

	$sec_weight  = 1000000;           // microseconds in sec
	$min_weight  = $sec_weight  * 60; // microseconds in min
	$hour_weight = $min_weight  * 60; // microseconds in hour
	$day_weight  = $hour_weight * 24; // microseconds in day


	for (;;)
	{
		if ($unixmicrointerval < $day_weight) break;
		$day++;
		$unixmicrointerval -= $day_weight;
	}

	for (;;)
	{
		if ($unixmicrointerval < $hour_weight) break;
		$hour++;
		$unixmicrointerval -= $hour_weight;
	}

	for (;;)
	{
		if ($unixmicrointerval < $min_weight) break;
		$min++;
		$unixmicrointerval -= $min_weight;
	}

	for (;;)
	{
		if ($unixmicrointerval < $sec_weight) break;
		$sec++;
		$unixmicrointerval -= $sec_weight;
	}


	$tmp = $day." days ".$hour." hours ".$min." mins ".$sec." secs ".$unixmicrointerval." microseconds";


	$result->set_ok();
	$result->set_value($tmp);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
