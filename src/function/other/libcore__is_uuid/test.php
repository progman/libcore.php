//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_uuid()
 */
(function()
{
/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE38') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE36') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE34') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE32') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12]') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a1z}') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}


	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE38') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE36') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE34') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE32') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d+6bb9bd380a12') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a1z') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step014\n";
		exit(1);
	}


	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step015\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE38') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step016\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE36') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step017\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE34') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step018\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE32') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step019\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12]') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step020\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a1z}') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step021\n";
		exit(1);
	}


	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step022\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE38') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step023\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE36') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step024\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE34') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step025\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE32') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step026\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a1}') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step027\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a1z') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step028\n";
		exit(1);
	}
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
