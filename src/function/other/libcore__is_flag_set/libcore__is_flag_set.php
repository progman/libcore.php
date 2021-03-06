//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check is flag set
 * \param[in] val source value (true::bool, not 0::int, "true"::string, "on"::string, "1"::string)
 * \param[in] flag_need_point flag_need_point
 * \return is flag set
 */
function libcore__is_flag_set($val)
{
	if (is_bool($val) === true)
	{
		return $val;
	}

	if (is_int($val) === true)
	{
		return ($val !== 0) ? true : false;
	}

	if (is_string($val) === true)
	{
		$val_low = strtolower($val);

		if
		(
			(strcmp($val_low, "true") === 0) ||
			(strcmp($val_low, "yes")  === 0) ||
			(strcmp($val_low, "on")   === 0) ||
			(strcmp($val_low, "1")    === 0)
		)
		{
			return true;
		}

		return false;
	}

	return false;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
