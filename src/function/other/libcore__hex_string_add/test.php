//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__hex_string_add()
 */
(function()
{
	$x = "1";
	$y = "2";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "03") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$x = "fe";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "ff") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$x = "ff";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "0100") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	$x = "ff";
	$y = "ff";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "01fe") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}


	for ($i=0; $i < 1000; $i++)
	{
		$a = libcore__hex_string_expand(dechex(rand(0, 9223372036854775807)), 32);
		$b = libcore__hex_string_expand(dechex(rand(0, 9223372036854775807)), 32);


		$c1 = libcore__hex_string_add($a, $b);
//		$c2 = libcore__hex_string_expand((dechex(hexdec($a) + hexdec($b))), 32);

		$x = gmp_init($a, 16);
		$y = gmp_init($b, 16);
		$z = gmp_add($x, $y);
		$c2 = libcore__hex_string_expand(gmp_strval($z, 16), 32);

		if (strcmp($c1, $c2) != 0)
		{
			echo "ERROR[".__FUNCTION__."()]: step005\n";
			echo "a      : ".$a."\n";
			echo "b      : ".$b."\n";
			echo "c1     : ".$c1."\n";
			echo "c2     : ".$c2."\n";
			exit(1);
		}
	}
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
