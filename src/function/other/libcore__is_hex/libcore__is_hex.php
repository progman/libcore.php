//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check hex string
 * \param[in] val source value
 * \param[in] flag_parity parity flag
 * \return hex string flag
 */
function libcore__is_hex($val, $flag_parity = false)
{
	$type = gettype($val);
	if
	(
		(strcmp($type, "integer") !== 0) &&
		(strcmp($type, "string")  !== 0)
	)
	{
		return false;
	}

	settype($val, "string");

	$size = strlen($val);

	if ($size === 0) return false;

	if ($flag_parity !== false)
	{
		if (libcore__is_parity($size) === false)
		{
			return false;
		}
	}

	for ($i=0; $i < $size; $i++)
	{
		if (libcore__is_hex_char(ord($val[$i])) === false)
		{
			return false;
		}
	}

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
