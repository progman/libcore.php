//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get humanable string of date of file
 * \param[in] filename file name
 * \param[in] gmt_offset time shift of GMT
 * \return humanable string of date of file
 */
function libcore__get_time_file($filename, $gmt_offset)
{
	global $_SERVER;

	$mtime = floor(microtime(true));
	for (;;)
	{
		$fd = @stat($_SERVER['DOCUMENT_ROOT'].$filename);
		if ($fd !== false)
		{
			$mtime = $fd['mtime'];
			break;
		}

		$fd = @stat($filename);
		if ($fd !== false)
		{
			$mtime = $fd['mtime'];
			break;
		}

		break;
	}

	return libcore__convert_date($gmt_offset, date('Y-m-d H:i:s', $mtime));
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
