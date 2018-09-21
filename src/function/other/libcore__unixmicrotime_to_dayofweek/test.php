//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrotime_to_dayofweek()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrotime_to_dayofweek';
	$start = libcore__get_unixmicrotime();


	$day_of_week = libcore__unixmicrotime_to_dayofweek('', false);
	if ($day_of_week !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('', true);
	if ($day_of_week !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

//1537180149866429 '2018-09-17 13:29:09.866429' Пн Monday    FALSE:1 TRUE:1
//1537266549866429 '2018-09-18 13:29:09.866429' Вт Tuesday   FALSE:2 TRUE:2
//1537352949866429 '2018-09-19 13:29:09.866429' Ср Wednesday FALSE:3 TRUE:3
//1537439349866429 '2018-09-20 13:29:09.866429' Чт Thursday  FALSE:4 TRUE:4
//1537525749866429 '2018-09-21 13:29:09.866429' Пт Friday    FALSE:5 TRUE:5
//1537612149866429 '2018-09-22 13:29:09.866429' Сб Saturday  FALSE:6 TRUE:6
//1537698549866429 '2018-09-23 13:29:09.866429' Вс Sunday    FALSE:0 TRUE:7

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537180149866429', false);
	if ($day_of_week !== 1)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537266549866429', false);
	if ($day_of_week !== 2)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537352949866429', false);
	if ($day_of_week !== 3)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537439349866429', false);
	if ($day_of_week !== 4)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537525749866429', false);
	if ($day_of_week !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537612149866429', false);
	if ($day_of_week !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537698549866429', false);
	if ($day_of_week !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

//1537180149866429 '2018-09-17 13:29:09.866429' Пн Monday    FALSE:1 TRUE:1
//1537266549866429 '2018-09-18 13:29:09.866429' Вт Tuesday   FALSE:2 TRUE:2
//1537352949866429 '2018-09-19 13:29:09.866429' Ср Wednesday FALSE:3 TRUE:3
//1537439349866429 '2018-09-20 13:29:09.866429' Чт Thursday  FALSE:4 TRUE:4
//1537525749866429 '2018-09-21 13:29:09.866429' Пт Friday    FALSE:5 TRUE:5
//1537612149866429 '2018-09-22 13:29:09.866429' Сб Saturday  FALSE:6 TRUE:6
//1537698549866429 '2018-09-23 13:29:09.866429' Вс Sunday    FALSE:0 TRUE:7


	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537180149866429', true);
	if ($day_of_week !== 1)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537266549866429', true);
	if ($day_of_week !== 2)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537352949866429', true);
	if ($day_of_week !== 3)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537439349866429', true);
	if ($day_of_week !== 4)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537525749866429', true);
	if ($day_of_week !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537612149866429', true);
	if ($day_of_week !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537698549866429', true);
	if ($day_of_week !== 7)
	{
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
