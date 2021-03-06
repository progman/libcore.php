//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get bool var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_bool($key_name, $value_default = null)
{
	$value = libcore__get_var_flag($key_name, $value_default);

	return libcore__flag2bool($value, $value_default);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
