//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__hex_string_expand($str, $size)
{
	$str_size = strlen($str);

	while ($str_size < $size)
	{
		$str = "0".$str;
		$str_size++;
	}

	return $str;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
