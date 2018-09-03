//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to iso8601, from "1508150177310040" to "2017-10-16T10:36:17.31004+0000"
 * \param[in] unixmicrotime time in microseconds like 1508150177310040 it is 2017-10-16 13:36:17.31004
 * \param[in] gmt_offset time shift in minutes from GMT
 * \return result time in iso8601
 */
function libcore__unixmicrotime_to_iso8601($unixmicrotime, $gmt_offset = 0)
{
	settype($unixmicrotime, "string");
	settype($gmt_offset, "integer");

//1234567890123456
//1508150177310040
//1528799349

	for (;;)
	{
		if (strlen($unixmicrotime) >= 16) break;

		$unixmicrotime = "0".$unixmicrotime;
	}

	if (strlen($unixmicrotime) != 16)
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if (libcore__is_uint($unixmicrotime) === false)
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if ($gmt_offset < -1439) // 23:59 = (23 * 60) + 59 = 1439
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if ($gmt_offset > 1439) // 23:59 = (23 * 60) + 59 = 1439
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if (libcore__is_sint($gmt_offset) === false)
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}


	$unixtime  = substr($unixmicrotime, 0, 10);
	$microtime = substr($unixmicrotime, 10, 6);
//echo "unixtime: ".$unixtime."\n";
//echo "microtime: ".$microtime."\n";


	$microtime = rtrim($microtime, "0");
	if (empty($microtime) === true)
	{
		$microtime = "0";
	}


	$tmp = gmdate("Y-m-d\TH:i:s", $unixtime);
	$tmp = $tmp.".".$microtime;


	$gmt_offset_hour = abs($gmt_offset) / 60;
	$gmt_offset_min  = abs($gmt_offset) - ($gmt_offset_hour * 60);


	if (strlen($gmt_offset_hour) === 1)
	{
		$gmt_offset_hour = "0".$gmt_offset_hour;
	}

	if (strlen($gmt_offset_min) === 1)
	{
		$gmt_offset_min = "0".$gmt_offset_min;
	}

	if ($gmt_offset < 0)
	{
		$tmp = $tmp."-";
	}
	else
	{
		$tmp = $tmp."+";
	}

	$tmp = $tmp.$gmt_offset_hour.$gmt_offset_min;

	return $tmp;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
