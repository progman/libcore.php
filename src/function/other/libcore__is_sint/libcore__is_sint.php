//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check sint
 * \param[in] val source value
 * \return sint flag
 */
function libcore__is_sint($val)
{
	$type = gettype($val);
	if
	(
		(strcmp($type, "integer") !== 0) &&
		(strcmp($type, "string")  !== 0)
	)
	{
		return false;
	}

	settype($val, "string");

	$size = strlen($val);
	if ($size === 0) return false;

	for ($i=0; $i < $size; $i++)
	{
		$ch = $val[$i];

		if
		(
			(ord($ch) >= ord('0')) && (ord($ch) <= ord('9'))
		)
		{
			continue;
		}

		if ($i === 0)
		{
			if
			(
				(ord($ch) === ord('-')) ||
				(ord($ch) === ord('+'))
			)
			{
				continue;
			}
		}

		return false;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
