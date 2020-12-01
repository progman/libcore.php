//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * remove part of string from tail if exists
 * \param[in] str string, example "dir/"
 * \param[in] val part of string, example "/"
 * \return string without part of string
 */
function libcore__remove_from_tail($str, $val)
{
	settype($str, "string");
	settype($val, "string");

	$str_size = strlen($str);
	$val_size = strlen($val);

	if ($str_size === 0) return $str;
	if ($val_size === 0) return $str;
	if ($val_size > $str_size) return $str;

	$part = substr($str, $str_size - $val_size);

	if (strcmp($part, $val) !== 0) return $str;

	$str = substr($str, 0, $str_size - $val_size);


	return $str;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
