//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_flag_unset()
 */
(function()
{
	if (libcore__is_flag_unset(false) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_flag_unset(0) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_flag_unset("false") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_flag_unset("off") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_flag_unset("0") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (libcore__is_flag_unset(true) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (libcore__is_flag_unset(100) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}

	if (libcore__is_flag_unset("true") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}

	if (libcore__is_flag_unset("on") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (libcore__is_flag_unset("1") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step010\n";
		exit(1);
	}

})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
