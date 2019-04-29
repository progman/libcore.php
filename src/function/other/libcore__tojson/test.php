//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__tojson()
 */
(function()
{
	$__FUNCTION__='libcore__tojson';
	$start = libcore__get_unixmicrotime();


// \u0022 - " - Unicode Character 'QUOTATION MARK' (U+0022)
// \u005c - \ - Unicode Character 'REVERSE SOLIDUS' (U+005C)
// \u002f - / - Unicode Character 'SOLIDUS' (U+002F) /
// \u0008 - b - backspace - Unicode Character 'BACKSPACE' (U+0008)
// \u000c - f - formfeed - Unicode Character 'FORM FEED (FF)' (U+000C)
// \u000a - \n newline - 'LINE FEED (LF)' (U+000A)
// \u000d - \r carriage return - 'CARRIAGE RETURN (CR)' (U+000D)
// \u0009 - \t horizontal tab - Unicode Character 'CHARACTER TABULATION' (U+0009)

/*
[\"][\\][\/][\b][\f][\n][\r][\t]
\"\\\/\b\f\n\r\t
*/
	$rc = libcore__tojson(" ");
	if (strcmp($rc, ' ') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$rc = libcore__tojson("\x22");
	if (strcmp($rc, '\"') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__tojson("\x5c");
	if (strcmp($rc, "\\\\") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	$rc = libcore__tojson("\x2f");
	if (strcmp($rc, '\/') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__tojson("\x08");
	if (strcmp($rc, '\b') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0c");
	if (strcmp($rc, '\f') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0a");
	if (strcmp($rc, '\n') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0d");
	if (strcmp($rc, '\r') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}

	$rc = libcore__tojson("\x09");
	if (strcmp($rc, '\t') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
