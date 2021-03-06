//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert any uuid type to type34
 * \param[in] uuid source value
 * \return flase if error or uuid type34
 */
function libcore__uuid2type34($uuid)
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

	$type32 = libcore__uuid2type32($uuid);


	$type34 = '{';
	$type34 = $type34.substr($type32, 0, 8);
	$type34 = $type34.substr($type32, 8, 4);
	$type34 = $type34.substr($type32, 12, 4);
	$type34 = $type34.substr($type32, 16, 4);
	$type34 = $type34.substr($type32, 20, 12);
	$type34 = $type34.'}';


	return $type34;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
