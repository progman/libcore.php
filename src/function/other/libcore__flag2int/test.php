//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__flag2int()
 */
(function()
{
	$__FUNCTION__='libcore__flag2int';

	if (libcore__flag2int("0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__flag2int("1") === 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
