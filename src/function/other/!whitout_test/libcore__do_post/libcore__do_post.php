//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * post data to url (obsolete)
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


	$http_request_arg = new stdClass();
	$http_request_arg->url           = $url;
	$http_request_arg->method        = "POST";
	$http_request_arg->flag_security = $flag_security;
	$http_request_arg->timeout       = $timeout;
	$http_request_arg->header_list   = $header_list;
	$http_request_arg->data          = $data;

	$rc = libcore__http_request($http_request_arg);
	if ($rc->is_ok() === false) return $rc;
	$answer = $rc->get_value();


	$result->set_ok();
	$result->set_value($answer->body);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
