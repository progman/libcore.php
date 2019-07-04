//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrointerval_to_text()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrointerval_to_text';
	$start = libcore__get_unixmicrotime();


// test1
	$rc = libcore__unixmicrointerval_to_text('40');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "40 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


// test2
	$rc = libcore__unixmicrointerval_to_text('59310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "59 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


// test3
	$rc = libcore__unixmicrointerval_to_text('77310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "1 mins 17 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


// test4
	$rc = libcore__unixmicrointerval_to_text('3677310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "1 hours 1 mins 17 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


// test5
	$rc = libcore__unixmicrointerval_to_text('90077310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "1 days 1 hours 1 mins 17 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010 ".$value."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
