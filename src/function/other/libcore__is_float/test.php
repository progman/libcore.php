//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_float()
 */
(function()
{
	$__FUNCTION__='libcore__is_float';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_float("") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_float("1") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.00") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_float("1.0.0") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_float("1.") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (libcore__is_float(".1") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (libcore__is_float(".1.") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
