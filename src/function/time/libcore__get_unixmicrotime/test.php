//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__get_unixmicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__get_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$gmt_offset = libcore__get_gmt_offset();


	$time_start = time();
	$time_start += ($gmt_offset * 60);


	$unixmicrotime = libcore__get_unixmicrotime();
//echo "unixmicrotime:".$unixmicrotime."\n";


	$time_stop = time();
	$time_stop += ($gmt_offset * 60);


	if (strlen($unixmicrotime) != 16)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$unixtime = substr($unixmicrotime, 0, 10);
//echo "unixtime:".$unixtime."\n";
//echo "time_stop:".$time_stop."\n";

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
