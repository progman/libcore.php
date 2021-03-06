//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check is flag unset
 * \param[in] val source value (false::bool, 0::int, "false"::string, "off"::string, "0"::string)
 * \param[in] flag_need_point flag_need_point
 * \return is flag set
 */
function libcore__is_flag_unset($val)
{
	if (is_bool($val) === true)
	{
		return ($val === false) ? true : false;
	}

	if (is_int($val) === true)
	{
		return ($val === 0) ? true : false;
	}

	if (is_string($val) === true)
	{
		$val_low = strtolower($val);

		if
		(
			(strcmp($val_low, "false") === 0) ||
			(strcmp($val_low, "no")    === 0) ||
			(strcmp($val_low, "off")   === 0) ||
			(strcmp($val_low, "0")     === 0)
		)
		{
			return true;
		}

		return false;
	}

	return false;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
