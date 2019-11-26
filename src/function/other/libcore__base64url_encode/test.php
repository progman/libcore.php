//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__base64url_encode()
 */
(function()
{
	$__FUNCTION__='libcore__base64url_encode';
	$start = libcore__get_unixmicrotime();


	$x1 = "any carnal pleasure..";
	$x2 = "any carnal pleasure.";
	$x3 = "any carnal pleasure";
	$x4 = "any carnal pleasur";
	$x5 = "any carnal pleasu";
	$x6 = "any carnal pleas";
	$x7 = chr(hexdec("f8"));
	$x8 = chr(hexdec("fc"));


	if (strcmp(base64_encode($x1), "YW55IGNhcm5hbCBwbGVhc3VyZS4u") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp(base64_encode($x2), "YW55IGNhcm5hbCBwbGVhc3VyZS4=") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (strcmp(base64_encode($x3), "YW55IGNhcm5hbCBwbGVhc3VyZQ==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp(base64_encode($x4), "YW55IGNhcm5hbCBwbGVhc3Vy") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (strcmp(base64_encode($x5), "YW55IGNhcm5hbCBwbGVhc3U=") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp(base64_encode($x6), "YW55IGNhcm5hbCBwbGVhcw==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (strcmp(base64_encode($x7), "+A==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp(base64_encode($x8), "/A==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$y1 = libcore__base64url_encode($x1);
	$y2 = libcore__base64url_encode($x2);
	$y3 = libcore__base64url_encode($x3);
	$y4 = libcore__base64url_encode($x4);
	$y5 = libcore__base64url_encode($x5);
	$y6 = libcore__base64url_encode($x6);
	$y7 = libcore__base64url_encode($x7);
	$y8 = libcore__base64url_encode($x8);


	if (strcmp($y1, "YW55IGNhcm5hbCBwbGVhc3VyZS4u") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (strcmp($y2, "YW55IGNhcm5hbCBwbGVhc3VyZS4") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (strcmp($y3, "YW55IGNhcm5hbCBwbGVhc3VyZQ") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (strcmp($y4, "YW55IGNhcm5hbCBwbGVhc3Vy") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (strcmp($y5, "YW55IGNhcm5hbCBwbGVhc3U") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (strcmp($y6, "YW55IGNhcm5hbCBwbGVhcw") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}
	if (strcmp($y7, "-A") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}
	if (strcmp($y8, "_A") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
