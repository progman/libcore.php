//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_flag()
 */
(function()
{
	if (libcore__is_flag("moon") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_flag_unset("moon") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_flag_set("moon") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_flag(0) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_flag(1) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}

})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
