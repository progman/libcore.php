//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert any uuid type to type32
 * \param[in] uuid source value
 * \return flase if error or uuid type32
 */
function libcore__uuid2type32($uuid)
{
	if (libcore__is_uuid($uuid) === false) return false;


/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	if (strcmp(gettype($uuid), 'string') !== 0)
	{
		return false;
	}
	$size = strlen($uuid);


	$template = '';

	if ($size === 38)
	{
		$template = '{xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}';
	}

	if ($size === 36)
	{
		$template = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
	}

	if ($size === 34)
	{
		$template = '{xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx}';
	}

	if ($size === 32)
	{
		return $uuid;
	}

	$template_size = strlen($template);
	if ($template_size === 0) return false;

	$out = '';
	for ($i=0; $i < $template_size; $i++)
	{
		if ($template[$i] === 'x')
		{
			$out .= $uuid[$i];
		}
	}

	return $out;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
