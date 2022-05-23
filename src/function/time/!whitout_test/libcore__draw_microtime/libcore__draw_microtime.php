//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * draw time for log lines
 * \param[in] desc description
 * \return drow time
 */
function libcore__draw_microtime($desc = '')
{
	$time = libcore__get_unixmicrotime();

	$tmp = libcore__unixmicrotime_to_iso8601($time);
//	$tmp = "[".date("Y-m-d H:i:s", time())."]";

	if ($desc === '')
	{
		return $tmp.": ";
	}

	return $tmp." [".$desc."]: ";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//