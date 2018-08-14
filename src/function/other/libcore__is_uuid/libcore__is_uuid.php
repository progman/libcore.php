//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check uuid
 * \param[in] uuid source value
 * \param[in] uuid_type type of source value
 * \return uuid flag
 */
function libcore__is_uuid($uuid, $uuid_type = 'ANY')
{
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


	for (;;)
	{
		if ((strcmp($uuid_type, 'TYPE38') === 0) && ($size === 38)) break;
		if ((strcmp($uuid_type, 'TYPE36') === 0) && ($size === 36)) break;
		if ((strcmp($uuid_type, 'TYPE34') === 0) && ($size === 34)) break;
		if ((strcmp($uuid_type, 'TYPE32') === 0) && ($size === 32)) break;
		if (strcmp($uuid_type, 'ANY') === 0) break;

		return false;
	}


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
		$template = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
	}

	$template_size = strlen($template);
	if ($template_size === 0) return false;

	for ($i=0; $i < $template_size; $i++)
	{
		if ($template[$i] === 'x')
		{
			if (libcore__is_hex_char(ord($uuid[$i])) === false) return false;
		}
		else
		{
			if ($uuid[$i] !== $template[$i]) return false;
		}
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
