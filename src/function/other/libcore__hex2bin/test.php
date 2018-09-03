//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__hex2bin()
 */
(function()
{
	$__FUNCTION__='libcore__hex2bin';
	$start = libcore__get_unixmicrotime();


	$x = 'super puper';

	$x_hex = bin2hex($x);

	$y = libcore__hex2bin($x_hex, true);

	if ($x !== $y)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//