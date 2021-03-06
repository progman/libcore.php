//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * set cookie
 * \param[in] cookie_name name of cookie
 * \param[in] cookie_value value of cookie
 * \param[in] expired expired time of cookie
 * \return nothing
 */
function libcore__set_cookie($cookie_name, $cookie_value, $expired)
{
	global $_COOKIE;

	setcookie($cookie_name, $cookie_value, $expired, "/");

	$_COOKIE[$cookie_name] = $cookie_value;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
