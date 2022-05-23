//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * perform http request
 * \param[in] arg arguments for query
 * \return result
 */
function libcore__http_request($arg)
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
	if (@is_string($arg->method) === false)
	{
		$result->set_err(1, 'method is not set');
		return $result;
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
	if (@isset($arg->data) === false)
	{
		$arg->data = '';
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


	for (;;)
	{
		if (strcmp($arg->method, "GET") === 0)
		{
			$rc = curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
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
			$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
			break;
		}

		if (strcmp($arg->method, "POST") === 0)
		{
			$rc = curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
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
			$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
			break;
		}

		if (strcmp($arg->method, "PUT") === 0)
		{
			$rc = curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
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
			$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
			break;
		}

		if (strcmp($arg->method, "DELETE") === 0)
		{
			$rc = curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
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
			$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
			break;
		}

/*
TODO:
HEAD - The HEAD method asks for a response identical to that of a GET request, but without the response body.
CONNECT - The CONNECT method establishes a tunnel to the server identified by the target resource.
OPTIONS - The OPTIONS method is used to describe the communication options for the target resource.
TRACE - The TRACE method performs a message loop-back test along the path to the target resource.
PATCH - The PATCH method is used to apply partial modifications to a resource.
*/

		$result->set_err(1, 'method is invalid');
		return $result;
	}

/*
	$rc = curl_setopt($ch, CURLOPT_POST, 0);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPGET, 1);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}
*/

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

		if (strcmp($arg->ssl_cert, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLCERT, $arg->ssl_cert);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}

		if (strcmp($arg->ssl_cert_type, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLCERTTYPE, $arg->ssl_cert_type);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}

		if (strcmp($arg->ssl_key, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLKEY, $arg->ssl_key);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
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


//	$info = curl_getinfo($ch);
//	print_r($info);


	$rc = curl_getinfo($ch, CURLINFO_RESPONSE_CODE); // $result['http_code'] = curl_getinfo($this -> ch,CURLINFO_HTTP_CODE);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}
	$code = $rc;
	settype($code, "integer");


	curl_close($ch);


	$answer = new stdClass();
	$answer->body = $output_body;
	$answer->head = $output_header_list;
	$answer->code = $code;


	$result->set_ok();
	$result->set_value($answer);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
