//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__array_add()
 */
(function()
{
	$__FUNCTION__='libcore__array_add';
	$start = libcore__get_unixmicrotime();


	$in1_list = array();
	array_push($in1_list, "1");
	array_push($in1_list, "2");


	$in2_list = array();
	array_push($in2_list, "2");
	array_push($in2_list, "3");


	$out_list = libcore__array_add($in1_list, $in2_list);


	if (count($out_list) !== 4)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	if (strcmp($out_list[0], "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (strcmp($out_list[1], "2") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (strcmp($out_list[2], "2") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (strcmp($out_list[3], "3") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
