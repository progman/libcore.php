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
	if (@is_bool($arg->flag_verbose) === false)
	{
		$arg->flag_verbose = false;
	}
	if (@is_bool($arg->flag_failonerror) === false)
	{
		$arg->flag_failonerror = false;
	}
	if (@is_string($arg->url) === false)
	{
		$result->set_err(1, 'url is not set');
		return $result;
	}
	if (@isset($arg->data) === false)
	{
		$arg->data = '';
	}
	if (@is_bool($arg->flag_security) === false)
	{
		$arg->flag_security = true;
	}
	if (@isset($arg->timeout) === false)
	{
		$arg->timeout = 30;
	}
	if (@is_array($arg->header_list) === false)
	{
		$arg->header_list = [];
	}
	if (@is_string($arg->referer) === false)
	{
		$arg->referer = "";
	}
	if (@is_string($arg->ssl_cert) === false)
	{
		$arg->ssl_cert = "";
	}
	if (@is_string($arg->ssl_cert_type) === false)
	{
		$arg->ssl_cert_type = "";
	}
	if (@is_string($arg->ssl_key) === false)
	{
		$arg->ssl_key = "";
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


	$rc = curl_init();
	if ($rc === false)
	{
		$result->set_err(1, 'curl is not init');
		return $result;
	}
	$ch = $rc;

	$rc = curl_setopt($ch, CURLOPT_VERBOSE, $arg->flag_verbose);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_FAILONERROR, $arg->flag_failonerror);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_URL, $arg->url);
	if ($rc === false)
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

	$rc = curl_setopt($ch, CURLOPT_POST, 1);
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

	$rc = curl_setopt($ch, CURLOPT_HTTPGET, 0);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
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

	if (strcmp($arg->referer, "") !== 0)
	{
		$rc = curl_setopt($ch, CURLOPT_REFERER, $arg->referer);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}
	}

	if ($arg->flag_security === true)
	{
//		$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
		$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

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

		$rc = curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSLCERT, $arg->ssl_cert);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSLCERTTYPE, $arg->ssl_cert_type);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSLKEY, $arg->ssl_key);
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
