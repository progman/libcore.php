//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__is_flag($val)
{
	if
	(
		(libcore__is_flag_unset($val) !== false) ||
		(libcore__is_flag_set($val)   !== false)
	)
	{
		return true;
	}

	return false;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
