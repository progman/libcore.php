//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * filter value
 * \param[in] value value
 * \param[in] value_list value list
 * \param[in] value_default default value
 * \return filtered value
 */
function libcore__filter_enum($value, $value_list, $value_default = null)
{
	settype($value, "string");


	if ($value_list === null)
	{
		return $value_default;
	}


	$value_list_size = count($value_list);
	if ($value_list_size === 0)
	{
		return $value_default;
	}


	for ($i=0; $i < $value_list_size; $i++)
	{
		$value_other = $value_list[$i];

		settype($value_other, "string");

		if (strcmp($value_other, $value) === 0)
		{
			return $value;
		}
	}


	return $value_default;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
