//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * open to gzip page
 * \param[in] flag_gzip is page gziping
 * \return void
 */
function libcore__gzip_open($flag_gzip)
{
	if (libcore__is_flag_set($flag_gzip) === false)
	{
		return;
	}


	ob_start();
	ob_implicit_flush(0);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
