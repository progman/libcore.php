//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get name of month
 * \param[in] month_num number of month
 * \param[in] flag_simple flag_simple
 * \return name of month
 */
function libcore__getmonthname($month_num, $flag_simple = false)
{
	if ($flag_simple === false)
	{
		if ($month_num ===  1) return 'января';
		if ($month_num ===  2) return 'февраля';
		if ($month_num ===  3) return 'марта';
		if ($month_num ===  4) return 'апреля';
		if ($month_num ===  5) return 'мая';
		if ($month_num ===  6) return 'июня';
		if ($month_num ===  7) return 'июля';
		if ($month_num ===  8) return 'августа';
		if ($month_num ===  9) return 'сентября';
		if ($month_num === 10) return 'октября';
		if ($month_num === 11) return 'ноября';
		if ($month_num === 12) return 'декабря';

		return 'мартобря';
	}


	if ($month_num ===  1) return 'Январь';
	if ($month_num ===  2) return 'Февраль';
	if ($month_num ===  3) return 'Март';
	if ($month_num ===  4) return 'Апрель';
	if ($month_num ===  5) return 'Май';
	if ($month_num ===  6) return 'Июнь';
	if ($month_num ===  7) return 'Июль';
	if ($month_num ===  8) return 'Август';
	if ($month_num ===  9) return 'Сентябрь';
	if ($month_num === 10) return 'Октябрь';
	if ($month_num === 11) return 'Ноябрь';
	if ($month_num === 12) return 'Декабрь';

	return 'Мартобрь';
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
