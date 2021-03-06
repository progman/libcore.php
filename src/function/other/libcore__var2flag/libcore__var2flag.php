//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from val to flag
 * \param[in] val value
 * \param[in] value_default default value
 * \return flag
 */
function libcore__var2flag($val, $value_default = "0")
{
	if (libcore__is_flag($val) === false)
	{
		return $value_default;
	}

	if (libcore__is_flag_set($val) === false)
	{
		return "0";
	}

	return "1";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
