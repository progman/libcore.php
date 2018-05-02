//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__array_sub($arr1, $arr2)
{
	if (is_array($arr1) === false)
	{
		$arr1 = array();
	}

	if (is_array($arr2) === false)
	{
		$arr2 = array();
	}

	$arr1_size = count($arr1);
	$arr2_size = count($arr2);

	$tmp_list = array();
	for ($i=0; $i < $arr1_size; $i++)
	{
		$flag_found = false;
		for ($j=0; $j < $arr2_size; $j++)
		{
			if (libcore__cmp_value($arr1[$i], $arr2[$j]) === true)
			{
				$flag_found = true;
				break;
			}
		}
		if ($flag_found === false)
		{
			array_push($tmp_list, $arr1[$i]);
		}
	}

	return $tmp_list;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
