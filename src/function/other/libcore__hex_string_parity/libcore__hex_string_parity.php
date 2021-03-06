//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * expand hex string to parity
 * \param[in] str hex string
 * \return parity hex string
 */
function libcore__hex_string_parity($str)
{
	$str_size = strlen($str);
	if (libcore__is_parity($str_size) === false)
	{
		return "0".$str;
	}

	return $str;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
