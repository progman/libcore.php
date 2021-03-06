//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__daymicrotime_text_to_daymicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__daymicrotime_text_to_daymicrotime';
	$start = libcore__get_unixmicrotime();


	$rc = libcore__daymicrotime_text_to_daymicrotime("23:59:59.999999");
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$value = $rc->get_value();
	if (strcmp($value, "86399999999") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$rc = libcore__daymicrotime_text_to_daymicrotime("23:59:59.abcdef");
	if ($rc->is_ok() === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
