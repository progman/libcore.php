//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * compare two objects like http://php.net/manual/en/language.oop5.object-comparison.php
 * \param[in] v1 object one
 * \param[in] v2 object two
 * \return is equal
 */
function libcore__cmp_object($obj1, $obj2)
{
	if ($obj1 != $obj2)
	{
		return false;
	}

	$objReflection1 = new ReflectionObject($obj1);
	$objReflection2 = new ReflectionObject($obj2);

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_STATIC);
	if ($rc === false) return false;

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_PUBLIC);
	if ($rc === false) return false;

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_PROTECTED);
	if ($rc === false) return false;

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_PRIVATE);
	if ($rc === false) return false;

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
