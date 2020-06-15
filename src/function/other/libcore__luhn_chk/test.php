//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__luhn_chk()
 */
(function()
{
	$__FUNCTION__='libcore__luhn_chk';
	$start = libcore__get_unixmicrotime();


	function libcore__luhn_chk__test($a, $b)
	{
/*
		$rc = libcore__luhn_sum($a);
		if ($rc->is_ok() === false)
		{
			return false;
		}
		$luhn_sum = $rc->get_value();
		if ($luhn_sum !== $b)
		{
//			echo "luhn sum is bad\n";
			return false;
		}
//		echo "luhn_sum: ".$luhn_sum."\n";
*/

		if (luhn_chk($b) === false)
		{
//			echo "luhn sum is bad\n";
			return false;
		}


//		echo "luhn sum is ok\n";
		return true;
	}


	$a = "456126121234546";
	$b = "4561261212345467";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$a = "7992739871";
	$b = "79927398713";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


//6376830
	$a = "637683000017475"; // "00017475";
	$b = "6376830000174758"; // "000174758";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$a = "637683000017476";
	$b = "6376830000174766";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$a = "637683000017477";
	$b = "6376830000174774";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$a = "637683000017478";
	$b = "6376830000174782";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$a = "637683000017479";
	$b = "6376830000174790";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}


	$a = "637683000017480";
	$b = "6376830000174808";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$a = "637683000017565";
	$b = "6376830000175656";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
