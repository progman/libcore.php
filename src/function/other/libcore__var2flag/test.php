//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__var2flag()
 */
(function()
{
	$__FUNCTION__='libcore__var2flag';
	$start = libcore__get_unixmicrotime();


	if (strcmp(libcore__var2flag(false),   "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(0),       "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("false"), "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("off"),   "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("0"),     "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(true),    "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(100),     "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("true"),  "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("on"),    "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("1"),     "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
