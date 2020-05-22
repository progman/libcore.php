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
/*
	require_once("../submodule/libcore.php/libcore.php");


	$unixmicrotime = libcore__get_unixmicrotime(true);
	$iso8601 = libcore__unixmicrotime_to_iso8601($unixmicrotime, 0);
	echo $iso8601."\n"; // 2020-05-22 16:05:43.941446+0000


	$unixmicrotime = libcore__get_unixmicrotime();
	$iso8601 = libcore__unixmicrotime_to_iso8601($unixmicrotime);
	echo $iso8601."\n"; // 2020-05-22 19:05:43.941630+0300


	$unixmicrotime = libcore__get_unixmicrotime();
	$iso8601 = libcore__unixmicrotime_to_iso8601($unixmicrotime, null, false);
	echo $iso8601."\n"; // 2020-05-22 19:05:43.944010
*/