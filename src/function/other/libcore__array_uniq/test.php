//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__array_uniq()
 */
(function()
{
	$__FUNCTION__='libcore__array_uniq';
	$start = libcore__get_unixmicrotime();


	$in_list = array();
	array_push($in_list, "1");
	array_push($in_list, "2");
	array_push($in_list, "2");
	array_push($in_list, "3");


	$out_list = libcore__array_uniq($in_list);


	if (count($out_list) !== 3)
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

	if (strcmp($out_list[2], "3") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$in_list = array("a" => "green", "b" => "green", "c" => "green");


	$out_list = libcore__array_uniq($in_list);


	if (count($out_list) !== 1)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (strcmp($out_list['a'], "green") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
