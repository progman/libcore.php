//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__uuid2type36()
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
	$rc = libcore__uuid2type36('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a17') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a16') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
