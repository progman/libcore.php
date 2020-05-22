//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get unixmicrotime
 * \param[in] flag_utc use UTC timezone
 * \return unixmicrotime
 */
function libcore__get_unixmicrotime($flag_utc = false)
{
	$unixmicrotime = "0000000000000000";


	list($part2, $part1) = explode(" ", microtime());
//echo "part1:".$part1."\n";
//echo "part2:".$part2."\n";


	if (strlen($part2) != 10)
	{
		return $unixmicrotime;
	}
	if ($part2[0] != '0')
	{
		return $unixmicrotime;
	}
	if ($part2[1] != '.')
	{
		return $unixmicrotime;
	}


	$microsec = substr($part2, 2, 6);
//echo "microsec:".$microsec."\n";


	$unixmicrotime = $part1.$microsec;
//echo "1unixmicrotime:".$unixmicrotime."\n";


	if ($flag_utc === false)
	{
		settype($unixmicrotime, "int");
		$unixmicrotime += (libcore__get_gmt_offset() * 60 * 1000000);
		settype($unixmicrotime, "string");
	}
//echo "2unixmicrotime:".$unixmicrotime."\n";


	for (;;)
	{
		if (strlen($unixmicrotime) >= 16) break;
		$unixmicrotime = "0".$unixmicrotime;
	}
//echo "3unixmicrotime:".$unixmicrotime."\n";


	return $unixmicrotime;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
