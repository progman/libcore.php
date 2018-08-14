//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * compare two arrays like http://php.net/manual/en/language.oop5.object-comparison.php
 * \param[in] arr1 array one
 * \param[in] arr2 array two
 * \return is equal
 */
function libcore__cmp_array(array $arr1, array $arr2)
{
	$size = count($arr1);

	if (count($arr2) !== $size)
	{
		return false;
	}

	$arrKeysInCommon = array_intersect_key($arr1, $arr2);
	if (count($arrKeysInCommon) !== $size)
	{
		return false;
	}

	$arrKeys1 = array_keys($arr1);
	$arrKeys2 = array_keys($arr2);

	$arr1flag_number = true;
	for ($i=0; $i < $size; $i++)
	{
		if (libcore__is_uint($arrKeys1[$i]) === false)
		{
			$arr1flag_number = false;
			break;
		}
	}

	$arr2flag_number = true;
	for ($i=0; $i < $size; $i++)
	{
		if (libcore__is_uint($arrKeys2[$i]) === false)
		{
			$arr2flag_number = false;
			break;
		}
	}

	if ($arr1flag_number !== $arr2flag_number)
	{
		return false;
	}

	if ($arr1flag_number === false)
	{
		array_multisort($arrKeys1);
		array_multisort($arrKeys2);

		foreach ($arrKeys1 as $key => $val)
		{
			if (strcmp($arrKeys1[$key], $arrKeys2[$key]) !== 0)
			{
				return false;
			}
		}

		foreach ($arr1 as $key => $val)
		{
			$rc = libcore__cmp_value($arr1[$key], $arr2[$key]);
			if ($rc === false)
			{
				return false;
			}
		}

		return true;
	}

	for ($i=0; $i < $size; $i++)
	{
		$rc = libcore__cmp_value($arr1[$i], $arr2[$i]);
		if ($rc === false)
		{
			return false;
		}
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
