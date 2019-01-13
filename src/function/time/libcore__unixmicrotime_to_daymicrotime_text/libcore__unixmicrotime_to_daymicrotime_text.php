//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to daymicrotime_text, from "1508150177310040" to "10:36:17.310040"
 * \param[in] unixmicrotime time in microseconds like 1508150177310040 it is 2017-10-16 13:36:17.31004
 * \return result daymicrotime_text like "10:36:17.310040"
 */
function libcore__unixmicrotime_to_daymicrotime_text($unixmicrotime)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	settype($unixmicrotime, "string");

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
	}

	if (libcore__is_uint($unixmicrotime) === false)
	{
		$unixmicrotime = '0000000000000000';
	}


	$unixtime  = substr($unixmicrotime, 0, 10);
	$microtime = substr($unixmicrotime, 10, 6);
//echo "unixtime: ".$unixtime."\n";
//echo "microtime: ".$microtime."\n";


	if (empty($microtime) === true)
	{
		$microtime = "000000";
	}

	for (;;)
	{
		if (strlen($microtime) >= 6) break;

		$microtime = $microtime."0";
	}


	$value = gmdate("H:i:s", $unixtime);
	$value = $value.".".$microtime;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
