//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get hex var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_hex($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_hex($value) === false)
	{
		if (libcore__is_hex($value_default) === false)
		{
			return null;
		}
		$value = $value_default;
	}
	$value = libcore__hex_string_parity($value);


	return $value;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
