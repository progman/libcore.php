//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check float
 * \param[in] val source value
 * \param[in] flag_need_point flag_need_point
 * \return float flag
 */
function libcore__is_float($val, $flag_need_point = false)
{
	settype($val, "string");

	$size = strlen($val);

	if ($size === 0) return false;


	$flag_point = false;
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

		if ($flag_point === false)
		{
			if (ord($ch) === ord('.'))
			{
				if ($i === 0) // bad ".1"
				{
					return false;
				}

				if (($i + 1) === $size) // bad "1."
				{
					return false;
				}

				$flag_point = true;
				continue;
			}
		}

		return false;
	}
	if (($flag_need_point !== false) && ($flag_point === false))
	{
		return false;
	}

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
