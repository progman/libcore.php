//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * route method and path to callback by template
 * \param[in] arg object with params, example: empty object
 * \param[in] method request method, example: $_SERVER['REQUEST_METHOD']
 * \param[in] path request path, example: $_SERVER['REQUEST_URI']
 * \param[in] route_list, exmaple: [ [ 'POST', '/v1/auth/login', handler_login ], [ 'GET', '/v1/users', handler_get_users ] ]
 * \return fact of route and arg object with mixed params and special property route_callback
 */
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__route(&$arg, $method, $path, $route_list)
{
	$result = new result_t(__FUNCTION__, __FILE__);


// check arguments
	if (is_object($arg) == false)
	{
		$result->set_err(1, "arg is not object");
		return $result;
	}

	if (is_string($method) == false)
	{
		$result->set_err(1, "method is not string");
		return $result;
	}

	if (libcore__filter_enum($method, [ 'POST', 'GET', 'PUT', 'DELETE' ], null) === null)
	{
		$result->set_err(1, "method is not correct");
		return $result;
	}

	if (is_string($path) == false)
	{
		$result->set_err(1, "path is not string");
		return $result;
	}

	if (is_array($route_list) == false)
	{
		$result->set_err(1, "route_list is not array");
		return $result;
	}


// ckeck templates
	foreach ($route_list as $item)
	{
		if (is_array($item) == false)
		{
			$result->set_err(1, "item of route_list is not array");
			return $result;
		}
		if (count($item) !== 3)
		{
			$result->set_err(1, "count of item of route_list is not equal 3");
			return $result;
		}


		$route_method   = $item[0];
		$route_template = $item[1];
		$route_callback = $item[2];


// validate method
		if (strcmp(strtoupper($method), strtoupper($route_method)) !== 0)
		{
			continue;
		}


// validate route template
		$rc = libcore__route_template_validate($route_template);
		if ($rc->is_ok() === false)
		{
			continue;
		}
		$route_template_data = $rc->get_value();


// validate route path
		$rc = libcore__route_path_validate($route_template_data, $path);
		if ($rc->is_ok() === false)
		{
			continue;
		}
		$route_path_data = $rc->get_value();


// mix params in arg
		foreach ($route_path_data as $key => $value)
		{
			$arg->{$key} = $value;
		}


// set route_callback
		$arg->{'route_callback'} = $route_callback;


		$result->set_ok();
		$result->set_value($arg);
		return $result;
	}


	$result->set_err(1, "path not found");
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
