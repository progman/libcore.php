//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get flag var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_flag($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


// if flag is set but flag is null then flag is true
	if ($var->flag_set === true)
	{
		if (is_string($var->value_original) === true)
		{
			if (strcmp($var->value_original, '') === 0)
			{
				$value = "1";
			}
		}
	}


	if (libcore__is_flag($value) === false)
	{
		if (libcore__is_flag($value_default) === false)
		{
			return null;
		}
		return $value_default;
	}


	if (libcore__is_flag_set($value) === true)
	{
		return "1";
	}


	return "0";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
