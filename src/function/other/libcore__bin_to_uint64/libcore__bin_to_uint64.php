//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert binary string to variable
 * \param[in] bin binary string like 010203 (not hex)
 * \return value
 */
function libcore__bin_to_uint64($bin)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$rc = is_string($bin);
	if ($rc === false)
	{
		$result->set_err(1, 'invalid argument type');
		return $result;
	}


	$rc = strlen($bin);
	if ($rc != 8)
	{
		$result->set_err(1, 'invalid argument size');
		return $result;
	}


	$b1 = substr($bin, 0, 1);
	$b2 = substr($bin, 1, 1);
	$b3 = substr($bin, 2, 1);
	$b4 = substr($bin, 3, 1);
	$b5 = substr($bin, 4, 1);
	$b6 = substr($bin, 5, 1);
	$b7 = substr($bin, 6, 1);
	$b8 = substr($bin, 7, 1);


	$v1 = ord($b1);
	$v2 = ord($b2);
	$v3 = ord($b3);
	$v4 = ord($b4);
	$v5 = ord($b5);
	$v6 = ord($b6);
	$v7 = ord($b7);
	$v8 = ord($b8);


	$val = ($v1 * pow(256, 0)) + ($v2 * pow(256, 1)) + ($v3 * pow(256, 2)) + ($v4 * pow(256, 3)) + ($v5 * pow(256, 4)) + ($v6 * pow(256, 5)) + ($v7 * pow(256, 6)) + ($v8 * pow(256, 7));


	$result->set_ok();
	$result->set_value($val);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
