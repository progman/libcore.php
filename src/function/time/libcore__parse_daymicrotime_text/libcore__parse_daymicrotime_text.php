//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from daymicrotime_text to parts, from "23:59:59.999999" to hour, min, sec, microsec
 * \param[in] daymicrotime_text like "23:59:59.999999"
 * \return result as hour, min, sec, microsec or FALSE if args are bad
 */
function libcore__parse_daymicrotime_text($daymicrotime_text)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	settype($daymicrotime_text, "string");

//0         1
//012345678901234
//23:59:59.999999

	if (ord($daymicrotime_text[2]) !== ord(':'))
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (ord($daymicrotime_text[5]) !== ord(':'))
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (ord($daymicrotime_text[8]) !== ord('.'))
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	$hour     = substr($daymicrotime_text, 0, 2);
	$min      = substr($daymicrotime_text, 3, 2);
	$sec      = substr($daymicrotime_text, 6, 2);
	$microsec = substr($daymicrotime_text, 9, 6);

	if (libcore__is_uint($hour) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (libcore__is_uint($min) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (libcore__is_uint($sec) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (libcore__is_uint($microsec) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}


	$value = new stdClass();
	$value->hour     = $hour;
	$value->min      = $min;
	$value->sec      = $sec;
	$value->microsec = $microsec;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
