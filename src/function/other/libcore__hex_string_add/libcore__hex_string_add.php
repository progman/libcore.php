//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * hex string add hex string
 * \param[in] source source hex string
 * \param[in] add another hex string
 * \param[in] flag_check_hex flag for check args
 * \return hex string
 */
function libcore__hex_string_add($source, $add, $flag_check_hex = true)
{
	if ($flag_check_hex === true)
	{
		if (libcore__is_hex($source) === false)
		{
			return "00";
		}

		if (libcore__is_hex($add) === false)
		{
			return "00";
		}
	}

	$size = strlen($source);
	if ($size < strlen($add))
	{
		return libcore__hex_string_add($add, $source);
	}
	$add = libcore__hex_string_expand($add, $size);


	$carry = 0;
	for ($i=0; $i < $size; $i++)
	{
		$x = hexdec($source[$size - $i - 1]) + hexdec($add[$size - $i - 1]);

		$x += $carry;
		$carry = 0;

		if ($x > 15)
		{
			$a = floor($x / 16);
			$b = $x - ($a * 16);

			$carry = $a;
			$x = $b;
		}

		$source[$size - $i - 1] = dechex($x);

		if ((($i + 1) === $size) && ($carry !== 0))
		{
			$size++;
			$source = libcore__hex_string_expand($source, $size);
			$add    = libcore__hex_string_expand($add,    $size);
		}
	}

	$source = libcore__hex_string_parity($source);

	return $source;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
