//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * perform http get
 * \param[in] arg arguments for query
 * \return result
 */
function libcore__http_get($arg)
{
	$result = new result_t(__FUNCTION__, __FILE__);


// check args
	if (@isset($arg->url) === false)
	{
		$result->set_err(1, 'url is not set');
		return $result;
	}
	if (@isset($arg->flag_security) === false)
	{
		$arg->flag_security = true;
	}
	if (@isset($arg->timeout) === false)
	{
		$arg->timeout = 30;
	}
	if (@isset($arg->header_list) === false)
	{
		$arg->header_list = [];
	}


// header callback function
	$output_header_list = [];
	$header_callback = function ($ch, $header_line) use (&$output_header_list)
	{
		array_push($output_header_list, $header_line);
//		echo $header_line;
		return strlen($header_line);
	};


	$ch = curl_init($arg->url);
	if ($ch === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPHEADER, $arg->header_list);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_POST, false);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPGET, true);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HEADERFUNCTION, $header_callback);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_TIMEOUT, $arg->timeout);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	if ($arg->flag_security === true)
	{
		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, 3);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}
	}

	$rc = curl_exec($ch);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}
	$output_body = $rc;

	curl_close($ch);


//	print_r($output_header_list);


	$answer = new stdClass();
	$answer->body = $output_body;
	$answer->head = $output_header_list;


	$result->set_ok();
	$result->set_value($answer);
	return $result;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
