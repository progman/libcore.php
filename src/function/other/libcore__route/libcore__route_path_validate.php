//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * parse and validate route path
 * \param[in] route_template_data result of function libcore__route_template_validate()
 * \param[in] route_path string, example: '/api/v1/companies/0a/users/0b?nextKey=0&limit=123&userId=123&a=&b'
 * \return fact of validation and array with params
 */
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__route_path_validate($route_template_data, $route_path)
{
	$result = new result_t(__FUNCTION__, __FILE__);


// separate path and params
	$param_list = [];
	$index = strpos($route_path, "?");
	if ($index !== false)
	{
		$paramStr = substr($route_path, $index + 1);
		$param_listInner = explode("&", $paramStr);

		foreach ($param_listInner as $param)
		{
			$pair = explode("=", $param);

			for (;;)
			{
				if (count($pair) === 2)
				{
					$key = $pair[0];
					$val = $pair[1];

					if (strlen($val) === 0)
					{
						$val = true;
					}

					$param_list[$key] = $val;
					break;
				}
				if (count($pair) === 1)
				{
					$key = $pair[0];
					$val = true;
					$param_list[$key] = $val;
					break;
				}
				break;
			}
		}


		$route_path = substr($route_path, 0, $index);
	}
	$route_path = libcore__remove_from_tail($route_path, '/');


// validate path by template data
	$key_list = [];
	$route_template_data_size = count($route_template_data);
	for ($i=0; $i < $route_template_data_size; $i++)
	{
		if ($route_template_data[$i]->flagKey === false)
		{
			$val_size = strlen($route_template_data[$i]->val);
			if (strlen($route_path) < $val_size)
			{
				$result->set_err(1, "route_template is not fit, stage1");
				return $result;
			}
			$rc = strpos($route_path, $route_template_data[$i]->val);
			if ($rc !== 0)
			{
				$result->set_err(1, "route_template is not fit, stage2");
				return $result;
			}
			$route_path = substr($route_path, $val_size);
		}
		else
		{
			if (($i + 1) === $route_template_data_size) // last item
			{
				$key = $route_path;
				$key_list[$route_template_data[$i]->val] = $key;
				$route_path = "";
			}
			else
			{
				$nextPart = $route_template_data[$i + 1]->val;
				$rc = strpos($route_path, $nextPart);
				if ($rc === false)
				{
					$result->set_err(1, "route_template is not fit, stage3");
					return $result;
				}
				$key = substr($route_path, 0, $rc);
				$key_list[$route_template_data[$i]->val] = $key;
				$route_path = substr($route_path, $rc);
			}
		}
	}
	if (strlen($route_path) !== 0)
	{
		$result->set_err(1, "route_template is not fit, stage4");
		return $result;
	}


// mix keys with params
	foreach ($param_list as $key => $value)
	{
		$key_list[$key] = $value;
	}


	$result->set_ok();
	$result->set_value($key_list);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
