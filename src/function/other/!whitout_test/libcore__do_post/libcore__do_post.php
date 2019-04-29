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


	$http_post_arg = new stdClass();
	$http_post_arg->url           = $url;
	$http_post_arg->data          = $data;
	$http_post_arg->flag_security = $flag_security;
	$http_post_arg->timeout       = $timeout;
	$http_post_arg->header_list   = $header_list;

	$rc = libcore__http_post($http_post_arg);
	if ($rc->is_ok() === false) return $rc;
	$answer = $rc->get_value();


	$result->set_ok();
	$result->set_value($answer->body);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
