//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__flag2bool()
 */
(function()
{
	$__FUNCTION__='libcore__flag2bool';

	if (libcore__flag2bool("0") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__flag2bool("1") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
