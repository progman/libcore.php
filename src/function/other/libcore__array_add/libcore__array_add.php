//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * add two arrays
 * \param[in] arr1 first array
 * \param[in] arr2 second array
 * \return result array
 */
function libcore__array_add($arr1, $arr2)
{
	if (is_array($arr1) === false)
	{
		$arr1 = array();
	}

	if (is_array($arr2) === false)
	{
		$arr2 = array();
	}

	$tmp_list = array_merge($arr1, $arr2);

	return $tmp_list;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//