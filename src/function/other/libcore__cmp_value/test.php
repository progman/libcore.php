//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__cmp_value()
 */
(function()
{
	$o1 = new stdClass();
	$o1->x = new stdClass();

	$o2 = new stdClass();

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 1, 'red'  => 2, 'green'  => 5, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'red'    => 2, 'purple' => 4);

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array();
	array_push($o1->x, '10');
	array_push($o1->x, '20');

	$o2 = new stdClass();
	$o2->x = array();
	array_push($o2->x, '20');
	array_push($o2->x, '10');

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 6, 'red'  => 2, 'green'  => 5, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'red'    => 2, 'purple' => 4);

	if (libcore__cmp_value($o1, $o2) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
})();
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
