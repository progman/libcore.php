//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__get_unixtime()
 */
(function()
{
	$__FUNCTION__='libcore__get_unixtime';
	$start = libcore__get_unixtime();


	$time_start = time();

	$unixtime = libcore__get_unixtime();

	$time_stop = time();


	if ($unixtime < $time_start)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if ($unixtime > $time_stop)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
