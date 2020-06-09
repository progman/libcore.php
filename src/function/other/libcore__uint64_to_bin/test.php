//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__uint64_to_bin()
 */
(function()
{
	$__FUNCTION__='libcore__uint64_to_bin';
	$start = libcore__get_unixmicrotime();


	$val = 72623859790382856;
	$rc = libcore__uint64_to_bin($val);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$bin = $rc->get_value();


	$hex = bin2hex($bin);


	if (strcmp($hex, "0807060504030201") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//