//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__remove_from_tail()
 */
(function()
{
	$__FUNCTION__='libcore__remove_from_tail';
	$start = libcore__get_unixmicrotime();


	$str = libcore__remove_from_tail("/dir/", "/");
	if (strcmp($str, "/dir") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$str = libcore__remove_from_tail("/dir", "/");
	if (strcmp($str, "/dir") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
