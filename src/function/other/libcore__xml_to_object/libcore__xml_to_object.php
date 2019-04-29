//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from xml to php object
 * \param[in] xml
 * \return php object
 */
function libcore__xml_to_object($xml)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$tmp = '';
	try
	{
		$tmp = new \SimpleXMLElement($xml);
	}
	catch(Exception $e)
	{
		$result->set_err(1, 'xml is broken');
		return $result;
	}

	$tmp_json = json_encode($tmp);
	if (json_last_error() !== JSON_ERROR_NONE)
	{
		$result->set_err(1, 'can not json encode');
		return $result;
	}

	$tmp = json_decode($tmp_json);
	if (json_last_error() !== JSON_ERROR_NONE)
	{
		$result->set_err(1, 'can not json decode');
		return $result;
	}


	$result->set_ok();
	$result->set_value($tmp);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
