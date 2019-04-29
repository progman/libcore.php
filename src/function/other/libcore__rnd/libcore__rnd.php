//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get rnd number
 * \param[in] min min of number
 * \param[in] max max of number
 * \return rnd number
 */
function libcore__rnd($min, $max)
{
	settype($min, "int");
	settype($max, "int");

	if ($min === $max)
	{
		return $min;
	}

	if ($max < $min)
	{
		$tmp = $min;
		$min = $max;
		$max = $tmp;
	}

	$rnd_size = 4;
	$rnd_max = 4294967295;

//	$crypto_strong = true;
//	$raw = openssl_random_pseudo_bytes($rnd_size, $crypto_strong);
	$raw = libcore__rnd_bin_string($rnd_size);
	if ($raw === false) return $min;

	$hex = bin2hex($raw);
	$rnd = hexdec($hex);

	$rnd = floor(($rnd/($rnd_max)) * ($max - $min + 1)) + $min;

	return ($rnd > $max) ? $max : $rnd;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
