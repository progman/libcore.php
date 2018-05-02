//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_enum($key_name, $value_list = null)
{
	$value_default = null;

	if (strcmp(gettype($value_list), 'array') === 0)
	{
		if (count($value_list) !== 0)
		{
			$value_default = $value_list[0];
		}
	}

	$value = libcore__get_var_str($key_name, $value_default);

	return libcore__filter_enum($value, $value_list);
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
