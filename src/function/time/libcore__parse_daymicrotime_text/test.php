//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__parse_daymicrotime_text()
 */
(function()
{
	$__FUNCTION__='libcore__parse_daymicrotime_text';
	$start = libcore__get_unixmicrotime();


	$rc = libcore__parse_daymicrotime_text("23:59:59.999999");
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$value = $rc->get_value();
	if (strcmp($value->hour, "23") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (strcmp($value->min, "59") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($value->sec, "59") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (strcmp($value->microsec, "999999") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$rc = libcore__parse_daymicrotime_text("01:23:45.987654");
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	$value = $rc->get_value();
	if (strcmp($value->hour, "01") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($value->min, "23") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}
	if (strcmp($value->sec, "45") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (strcmp($value->microsec, "987654") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}


	$rc = libcore__parse_daymicrotime_text("23:59:59.abcdef");
	if ($rc->is_ok() === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
