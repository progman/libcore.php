//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_hex()
 */
(function()
{
	$__FUNCTION__='libcore__is_hex';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_hex("") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_hex("z") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_hex("0") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

for ($i=0; $i < 1000000; $i++)
{
	if (libcore__is_hex("0123456789abcdefABCDEF") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
}

	if (libcore__is_hex("0123456789abcdefABCDEF0", true) == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
