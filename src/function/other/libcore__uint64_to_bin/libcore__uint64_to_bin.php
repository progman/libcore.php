//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert integer to binary string
 * \param[in] val integer value
 * \return binary string
 */
function libcore__uint64_to_bin($val)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	if
	(
		(is_int($val) === false) &&
		(is_string($val) === false)
	)
	{
		$result->set_err(1, 'invalid argument type');
		return $result;
	}


	if (is_string($val) === true)
	{
		if (libcore__is_uint($val) === false)
		{
			$result->set_err(1, 'invalid argument value');
			return $result;
		}
	}


	$hex = gmp_strval($val, 16);
	if (strlen($hex) === 15)
	{
		$hex = "0".$hex;
	}


	$b1 = substr($hex, 14, 2);
	$b2 = substr($hex, 12, 2);
	$b3 = substr($hex, 10, 2);
	$b4 = substr($hex,  8, 2);
	$b5 = substr($hex,  6, 2);
	$b6 = substr($hex,  4, 2);
	$b7 = substr($hex,  2, 2);
	$b8 = substr($hex,  0, 2);


	$bin = chr($b1).chr($b2).chr($b3).chr($b4).chr($b5).chr($b6).chr($b7).chr($b8);


	$result->set_ok();
	$result->set_value($bin);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
