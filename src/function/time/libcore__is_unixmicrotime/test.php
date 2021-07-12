//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_unixmicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__is_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$rc = libcore__is_unixmicrotime('');
	if ($rc !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$rc = libcore__is_unixmicrotime('0');
	if ($rc !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$rc = libcore__is_unixmicrotime('0z');
	if ($rc !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$rc = libcore__is_unixmicrotime('000000');
	if ($rc !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$rc = libcore__is_unixmicrotime('0000000');
	if ($rc !== true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$rc = libcore__is_unixmicrotime('1528799349000000');
	if ($rc !== true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
