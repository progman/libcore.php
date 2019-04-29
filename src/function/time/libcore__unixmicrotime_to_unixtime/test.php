//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrotime_to_unixtime()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrotime_to_unixtime';
	$start = libcore__get_unixmicrotime();


	$unixtime = libcore__unixmicrotime_to_unixtime('1528799349000000');
	if (strcmp($unixtime, "1528799349") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		echo "unixtime:".$unixtime."\n";
		exit(1);
	}

	$unixtime = libcore__unixmicrotime_to_unixtime('1528799349');
	if ($unixtime !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "unixtime:".$unixtime."\n";
		exit(1);
	}

	$unixtime = libcore__unixtime_to_unixmicrotime('');
	if ($unixtime !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		echo "unixtime:".$unixtime."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
