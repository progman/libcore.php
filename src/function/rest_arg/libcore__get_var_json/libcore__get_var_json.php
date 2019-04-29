//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get json var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_json($key_name = null, $value_default = null)
{
	if ($key_name !== null)
	{
		$var = libcore__get_var($key_name, $value_default);
		$value_json = $var->value;
		$value = json_decode($value_json);
		if (json_last_error() !== JSON_ERROR_NONE)
		{
			$value = null;
		}
	}
	else
	{
		$value_json = file_get_contents("php://input");
		$value = json_decode($value_json);
		if (json_last_error() !== JSON_ERROR_NONE)
		{
			$value = null;
		}
	}


	if ($value === null)
	{
		return $value_default;
	}


	return $value;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
