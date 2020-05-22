//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__get_gmt_offset()
 */
(function()
{
	$__FUNCTION__='libcore__get_gmt_offset';
	$start = libcore__get_unixmicrotime();


	$tz = date_default_timezone_get();
//	echo "tz:".$tz."\n";


	$old_gmt_offset = libcore__get_gmt_offset();


	if (date_default_timezone_set("UTC") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$gmt_offset = libcore__get_gmt_offset();
	if ($gmt_offset !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "gmt_offset:".$gmt_offset."\n";
		exit(1);
	}


	if (date_default_timezone_set("Europe/Moscow") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$gmt_offset = libcore__get_gmt_offset();
	if ($gmt_offset !== 180)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		echo "gmt_offset:".$gmt_offset."\n";
		exit(1);
	}


	if (date_default_timezone_set($tz) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$new_gmt_offset = libcore__get_gmt_offset();


	if (strcmp($old_gmt_offset, $new_gmt_offset) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();


//	$stop = libcore__get_unixmicrotime();
//	$rc = libcore__unixmicrointerval_to_text($stop - $start);
//	if ($rc->is_ok() === false)
//	{
//		echo "ERROR[".$__FUNCTION__."()]: libcore__unixmicrointerval_to_text is broken\n";
//		exit(1);
//	}
//	echo $__FUNCTION__."(): ".($rc->get_value())."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
