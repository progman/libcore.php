//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
function libcore__shell_get_hex($key_name, $value_default = '00')
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_hex($value) === false)
	{
		if (libcore__is_hex($value_default) === false)
		{
			return 0;
		}
		return $value_default;
	}


	return $value;
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//