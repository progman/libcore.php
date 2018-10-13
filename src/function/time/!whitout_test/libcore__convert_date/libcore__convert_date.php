//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from datatime to string
 * \param[in] gmt_offset time shit from GMT
 * \param[in] datatime datatime
 * \return humanable string of time
 */
function libcore__convert_date($gmt_offset, $datatime)
{
	$a = strtotime($datatime);
	$a2 = gmdate('Y-m-d H:i:s', $a);
	$a3 = strtotime($a2);
	$a4 = $a3 + ($gmt_offset * 60 * 60);


	$b = date('Y-m-d H:i:s', $a4);
	$datatime = $b;


	if ($datatime == "") return '';

	if
	(
		(strtotime($datatime) > strtotime(date('Y-m-d', strtotime("now")))) &&
		(strtotime($datatime) < strtotime(date('Y-m-d', strtotime("+1 day"))))
	)
	{
		return 'Сегодня&nbsp;в&nbsp;'.date('H:i', strtotime($datatime));
	}

	if
	(
		(strtotime($datatime) < strtotime(date('Y-m-d', strtotime("now")))) &&
		(strtotime($datatime) > strtotime(date('Y-m-d', strtotime("-1 day"))))
	)
	{
		return 'Вчера&nbsp;в&nbsp;'.date('H:i', strtotime($datatime));
	}

	$str = '';
	$str = $str.date('d', strtotime($datatime));
	$str = $str.'&nbsp;';
	$str = $str.libcore__getmonthname(date('m', strtotime($datatime)));

	$year = date('Y', strtotime($datatime));
	$year_now = date('Y', strtotime("now"));

	if ($year != $year_now)
	{
		$str = $str.'&nbsp;';
		$str = $str.$year;
	}

	if (strcmp($str, '30 ноября 1999, 00:00') === 0)
	{
		return 'unknown';
	}

	return $str;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
