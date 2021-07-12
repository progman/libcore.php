//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixtime_to_unixmicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__unixtime_to_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$unixmicrotime = libcore__unixtime_to_unixmicrotime('1528799349');
	if (strcmp($unixmicrotime, "1528799349000000") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		echo "unixmicrotime:".$unixmicrotime."\n";
		exit(1);
	}

	$unixmicrotime = libcore__unixtime_to_unixmicrotime('1528799349000000');
	if ($unixmicrotime === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "unixmicrotime:".$unixmicrotime."\n";
		exit(1);
	}

	$unixmicrotime = libcore__unixtime_to_unixmicrotime('');
	if ($unixmicrotime !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		echo "unixmicrotime:".$unixmicrotime."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
