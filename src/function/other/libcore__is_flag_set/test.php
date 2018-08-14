//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_flag_set()
 */
(function()
{
	if (libcore__is_flag_set(false) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_flag_set(0) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_flag_set("false") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_flag_set("off") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_flag_set("0") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (libcore__is_flag_set(true) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (libcore__is_flag_set(100) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}

	if (libcore__is_flag_set("true") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}

	if (libcore__is_flag_set("on") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (libcore__is_flag_set("1") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step010\n";
		exit(1);
	}

})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
