//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get float var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_float($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_float($value) === false)
	{
		if (libcore__is_float($value_default) === false)
		{
			return null;
		}
		return $value_default;
	}


	return $value;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
