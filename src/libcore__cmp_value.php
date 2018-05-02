//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// like http://php.net/manual/en/language.oop5.object-comparison.php
//function libcore__cmp_value($v1, $v2): bool
function libcore__cmp_value($v1, $v2)
{
	$type1 = gettype($v1);
	$type2 = gettype($v2);

	if (strcmp($type1, $type2) !== 0)
	{
		return false;
	}

	if (strcmp($type1, 'boolean') === 0)
	{
		return $v1 === $v2;
	}

	if (strcmp($type1, 'integer') === 0)
	{
		return $v1 === $v2;
	}

	if (strcmp($type1, 'double') === 0)
	{
		if (strcmp(((string)$v1), ((string)$v2)) === 0)
		{
			return true;
		}
		return false;
	}

	if (strcmp($type1, 'string') === 0)
	{
		if (strcmp($v1, $v2) === 0)
		{
			return true;
		}
		return false;
	}

	if (strcmp($type1, 'array') === 0)
	{
		return libcore__cmp_array($v1, $v2);
	}

	if (strcmp($type1, 'object') === 0)
	{
		return libcore__cmp_object($v1, $v2);
	}

	if (strcmp($type1, 'resource') === 0)
	{
		return false; // I do not know how compare it
	}

	if (strcmp($type1, 'NULL') === 0)
	{
		return true;
	}

	if (strcmp($type1, 'unknown type') === 0)
	{
		return false; // I do not know how compare it
	}

	return false;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
