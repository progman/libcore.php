//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * post data to url
 * \param[in] url url for post
 * \param[in] data data for post
 * \param[in] flag_security flag security
 * \param[in] timeout timeout
 * \param[in] header_list list of headers
 * \return result
 */
function libcore__do_post($url, $data, $flag_security = true, $timeout = 30, $header_list = [])
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$header_line_list = [];
	$header_callback = function ($ch, $header_line) use (&$header_line_list)
	{
		array_push($header_line_list, $header_line);
//		echo $header_line;
		return strlen($header_line);
	};


	$ch = curl_init($url);
	if ($ch === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPHEADER, $header_list);
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

	$rc = curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
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

	$rc = curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
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

	if ($flag_security === true)
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


//	print_r($header_line_list);


	curl_close($ch);
	$result->set_ok();
	$result->set_value($rc);
	return $result;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
