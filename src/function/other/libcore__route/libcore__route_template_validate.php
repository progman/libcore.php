//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * parse and validate route template
 * \param[in] route_template string, example: '/api/v1/companies/{id}/users/{userId}'
 * \return array with parts of route_template
 */
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__route_template_validate($route_template)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$data = [];
	$route_template = libcore__remove_from_tail($route_template, '/');
	if (strlen($route_template) === 0)
	{
		$result->set_err(1, "route_template is empty");
		return $result;
	}


// init parity trigger
	$flagKey = true;
	if ($route_template[0] === '{')
	{
		$flagKey = false;
	}


// main cycle
	for (;;)
	{
		$route_template_size = strlen($route_template);
		if ($route_template_size === 0) break;

		if ($route_template[0] === '{')
		{
			if ($flagKey === true)
			{
				$result->set_err(1, "route_template has key after key");
				return $result;
			}


			$val = '';
			$flag_key_open = true;
			for ($i=1; $i < $route_template_size; $i++)
			{
				if ($route_template[$i] === '}')
				{
					$i++;
					$flag_key_open = false;
					break;
				}
				$val .= $route_template[$i];
			}
			if ($flag_key_open === true)
			{
				$result->set_err(1, "route_template has broken key (it is not closed)");
				return $result;
			}
			$route_template = substr($route_template, $i, $route_template_size - $i);

			$tmp = (object)[];
			$tmp->flagKey  = true;
			$tmp->val      = $val;
			$tmp->route_template = $route_template;

			$flagKey = true;
			$data[] = $tmp;
		}
		else
		{
			if ($flagKey === false)
			{
				$result->set_err(1, "route_template has key after key");
				return $result;
			}


			$val = '';
			for ($i=0; $i < $route_template_size; $i++)
			{
				if ($route_template[$i] === '{')
				{
					break;
				}
				$val .= $route_template[$i];
			}
			$route_template = substr($route_template, $i, $route_template_size - $i);

			$tmp = (object)[];
			$tmp->flagKey  = false;
			$tmp->val      = $val;
			$tmp->route_template = $route_template;

			$flagKey = false;
			$data[] = $tmp;
		}
	}
	if (count($data) === 0)
	{
		$result->set_err(1, "route_template_data is empty");
		return $result;
	}


	$result->set_ok();
	$result->set_value($data);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
