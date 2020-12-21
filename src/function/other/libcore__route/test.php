//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__remove_from_tail()
 */
(function()
{
	$__FUNCTION__='libcore__route';
	$start = libcore__get_unixmicrotime();



	$route_template = '/api/v1/companies/{id}/users/{userId}';
	$route_path = '/api/v1/companies/0a/users/0b?nextKey=0&limit=123&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'id') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '0b') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}
	if (strcmp($route_path_data['id'], '0a') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/{id}/users/{userId}';
	$route_path = '/api/v1/companies/0a/users/0b?nextKey=0&limit=123&userId=321&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step017\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step018\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step019\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step020\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step021\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step022\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step023\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'id') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step024\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step025\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step026\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '321') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step027\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step028\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step029\n";
		exit(1);
	}
	if (strcmp($route_path_data['id'], '0a') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step030\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/{id}/users';
	$route_path = '/api/v1/companies/0a/users?nextKey=0&limit=123&userId=321&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step031\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step032\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();
	if (count($route_path_data) !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step033\n";
		exit(1);
	}

	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step034\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step035\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step036\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step037\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step038\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'id') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step039\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step040\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step041\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '321') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step042\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step043\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step044\n";
		exit(1);
	}
	if (strcmp($route_path_data['id'], '0a') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step045\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users';
	$route_path = '/api/v1/companies/users?nextKey=0&limit=123&userId=321&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step046\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step047\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step048\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step049\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step050\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step051\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step052\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step053\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step054\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step055\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '321') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step056\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step057\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step058\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users';
	$route_path = '/api/v1/companies/users';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step059\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step060\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step061\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users/';
	$route_path = '/api/v1/companies/users';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step062\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step063\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();
	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step064\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users';
	$route_path = '/api/v1/companies/users/';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step065\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step066\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step067\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users/';
	$route_path = '/api/v1/companies/users/';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step068\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step069\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step070\n";
		exit(1);
	}


// make handler
//	function libcore__route_handler(&$arg)
	$handler = function (&$arg)
	{
//		echo "---=== libcore__route_handler() ===---\n";

		if (strcmp($arg->{'id'}, '0a') !== 0)
		{
			echo "WARNING: id is alien\n";
			return;
		}

		if (strcmp($arg->{'userId'}, '0b') !== 0)
		{
			echo "WARNING: userId is alien\n";
			return;
		}

		if (strcmp($arg->{'nextKey'}, '0') !== 0)
		{
			echo "WARNING: nextKey is alien\n";
			return;
		}

		if (strcmp($arg->{'limit'}, '123') !== 0)
		{
			echo "WARNING: limit is alien\n";
			return;
		}

		if (strcmp($arg->{'a'}, '') !== 0)
		{
			echo "WARNING: a is alien\n";
			return;
		}

		if (strcmp($arg->{'b'}, '') !== 0)
		{
			echo "WARNING: b is alien\n";
			return;
		}

		$arg->{'value'} = 7;
	};


// route
	$arg = (object)[];
	$method = 'GET';
	$path = '/api/v1/companies/0a/users/0b?nextKey=0&limit=123&a=&b';
	$rc = libcore__route($arg, $method, $path,
	[
//		[ 'GET', '/api/v1/companies/{id}/users/{userId}', 'libcore__route_handler' ]
		[ 'GET', '/api/v1/companies/{id}/users/{userId}', $handler ]
	]);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step071\n";
		exit(1);
	}
	$arg = $rc->get_value();
	$route_callback = $arg->{'route_callback'};



// check value before call handler
	$arg->{'value'} = 5;
	if ($arg->{'value'} !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step072\n";
		exit(1);
	}


// call handler
	$route_callback($arg);


// check value after call handler
	if ($arg->{'value'} !== 7)
	{
		echo "ERROR[".$__FUNCTION__."()]: step073\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
