//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from daymicrotime_text to daymicrotime, from "23:59:59.999999" to 86399999999
 * \param[in] daymicrotime_text like "23:59:59.999999"
 * \return result like 86399999999 or FALSE if args are bad
 */
function libcore__daymicrotime_text_to_daymicrotime($daymicrotime_text)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$rc = libcore__parse_daymicrotime_text($daymicrotime_text);
	if ($rc->is_ok() === false) return $rc;
	$value = $rc->get_value();

	$hour     = $value->hour;
	$min      = $value->min;
	$sec      = $value->sec;
	$microsec = $value->microsec;


	$value = ((($hour * 60 * 60) + ($min * 60) + $sec) * 1000000) + $microsec;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
