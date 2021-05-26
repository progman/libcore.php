//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get var from $_ENV or $_SERVER or $_GET or $_POST or $_FILES or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var($key_name, $value_default = null)
{
	global $_ENV;
	global $_SERVER;
	global $_GET;
	global $_POST;
	global $_FILES;
	global $_COOKIE;


	$item = new stdClass();

	if (getenv($key_name) !== false)
	{
		$item->flag_set       = true;
		$item->value          = getenv($key_name);
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_ENV[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_ENV[$key_name];
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_SERVER[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_SERVER[$key_name];
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_GET[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_GET[$key_name];
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_POST[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_POST[$key_name];
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_FILES[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_FILES[$key_name];
		$item->value_original = $item->value;
		return $item;
	}


	for (;;)
	{
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if (json_last_error() !== JSON_ERROR_NONE)
		{
			break;
		}

		if (isset($request->{$key_name}) === true)
		{
			$item->flag_set       = true;
			$item->value          = $request->{$key_name};
			$item->value_original = $item->value;
			return $item;
		}

		break;
	}


	if (isset($_COOKIE[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_COOKIE[$key_name];
		$item->value_original = $item->value;
		return $item;
	}


	$item->flag_set       = false;
	$item->value          = $value_default;
	$item->value_original = null;
	return $item;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
