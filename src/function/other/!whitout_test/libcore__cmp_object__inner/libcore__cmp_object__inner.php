//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * compare two objects like http://php.net/manual/en/language.oop5.object-comparison.php
 * \param[in] obj1 object one
 * \param[in] objReflection1 reflection of object one
 * \param[in] obj2 object two
 * \param[in] objReflection2 reflection of object two
 * \param[in] property_type type of property
 * \return is equal
 */
function libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, $property_type)
{
	$arrProperties1 = $objReflection1->getProperties($property_type);
	$arrProperties2 = $objReflection2->getProperties($property_type);


	$arrProperties1_size = count($arrProperties1);
	$arrProperties2_size = count($arrProperties2);

	if ($arrProperties1_size !== $arrProperties2_size)
	{
		return false;
	}


	$arr1 = array();
	for ($i=0; $i < $arrProperties1_size; $i++)
	{
		$arr1[$arrProperties1[$i]->{'name'}] = $arrProperties1[$i]->{'class'};
	}
	array_multisort($arr1);


	$arr2 = array();
	for ($i=0; $i < $arrProperties2_size; $i++)
	{
		$arr2[$arrProperties2[$i]->{'name'}] = $arrProperties2[$i]->{'class'};
	}
	array_multisort($arr2);


	if (libcore__cmp_array($arr1, $arr2) === false)
	{
		return false;
	}


	foreach ($arr1 as $key => $value)
	{
		$rc = libcore__cmp_value($obj1->{$key}, $obj2->{$key});
		if ($rc === false)
		{
			return false;
		}
	}


	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
