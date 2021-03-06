//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__bin_to_uint64()
 */
(function()
{
	$__FUNCTION__='libcore__bin_to_uint64';
	$start = libcore__get_unixmicrotime();


	$bin = hex2bin("0807060504030201");


	$rc = libcore__bin_to_uint64($bin);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if ($rc->get_value() !== 72623859790382856)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
