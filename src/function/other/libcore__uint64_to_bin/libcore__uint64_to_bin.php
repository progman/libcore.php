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

	for (;;)
	{
		if (strlen($hex) >= 16)
		{
			break;
		}
		$hex = "0".$hex;
	}

	if (strlen($hex) !== 16)
	{
		$result->set_err(1, 'problem with gmp');
		return $result;
	}

	if (libcore__is_hex($hex, true) === false)
	{
		$result->set_err(1, 'problem with gmp');
		return $result;
	}

	$b1 = hexdec(substr($hex, 14, 2));
	$b2 = hexdec(substr($hex, 12, 2));
	$b3 = hexdec(substr($hex, 10, 2));
	$b4 = hexdec(substr($hex,  8, 2));
	$b5 = hexdec(substr($hex,  6, 2));
	$b6 = hexdec(substr($hex,  4, 2));
	$b7 = hexdec(substr($hex,  2, 2));
	$b8 = hexdec(substr($hex,  0, 2));


	$bin = chr($b1).chr($b2).chr($b3).chr($b4).chr($b5).chr($b6).chr($b7).chr($b8);


	$result->set_ok();
	$result->set_value($bin);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
