//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE... and filtred it
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_enum($key_name, $value_list = null, $value_default = null)
{
	if ($value_list === null)
	{
		return $value_default;
	}


	if (strcmp(gettype($value_list), 'array') !== 0)
	{
		return $value_default;
	}


	$value = libcore__get_var_str($key_name, $value_default);


	return libcore__filter_enum($value, $value_list, $value_default);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
