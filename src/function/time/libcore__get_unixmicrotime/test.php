//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__get_unixmicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__get_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$time_start = time();

	$unixmicrotime = libcore__get_unixmicrotime();

	$time_stop = time();

	if (strlen($unixmicrotime) != 16)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$unixtime = substr($unixmicrotime, 0, 10);

	if ($unixtime < $time_start)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if ($unixtime > $time_stop)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
