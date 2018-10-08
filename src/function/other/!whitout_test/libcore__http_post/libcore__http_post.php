//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * perform http post
 * \param[in] arg arguments for query
 * \return result
 */
function libcore__http_post($arg)
{
	$result = new result_t(__FUNCTION__, __FILE__);


// check args
	if (@isset($arg->url) === false)
	{
		$result->set_err(1, 'url is not set');
		return $result;
	}
	if (@isset($arg->data) === false)
	{
		$arg->data = '';
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
		$header_line_size1 = strlen($header_line);
		$header_line = str_replace(array("\n", "\r"), '', $header_line);
		$header_line_size2 = strlen($header_line);

		if ($header_line_size2 !== 0)
		{
			array_push($output_header_list, $header_line);
		}

//		echo $header_line;
		return $header_line_size1;
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

	$rc = curl_setopt($ch, CURLOPT_POST, true);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_POSTFIELDS, $arg->data);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPGET, false);
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

//	$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
	$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	if ($arg->flag_security === true)
	{
//		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, 3);
//		if ($rc === false)
//		{
//			$result->set_err(1, curl_error($ch));
//			curl_close($ch);
//			return $result;
//		}

//		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
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
