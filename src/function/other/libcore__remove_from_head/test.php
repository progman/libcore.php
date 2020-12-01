//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__remove_from_head()
 */
(function()
{
	$__FUNCTION__='libcore__remove_from_head';
	$start = libcore__get_unixmicrotime();


	$str = libcore__remove_from_head("/dir/", "/");
	if (strcmp($str, "dir/") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$str = libcore__remove_from_head("dir/", "/");
	if (strcmp($str, "dir/") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
