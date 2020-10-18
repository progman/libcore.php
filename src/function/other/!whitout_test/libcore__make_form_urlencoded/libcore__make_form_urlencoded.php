//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
	$item_list = [];

	$item = new stdClass();
	$item->name  = "xxx_text";
	$item->value = "xxx_text_value";
	$item_list[] = $item;

	$item = new stdClass();
	$item->name  = "xxx_hidden";
	$item->value = "xxx_hidden_value";
	$item_list[] = $item;

	$item = new stdClass();
	$item->name  = "xxx_submit";
	$item->value = "Upload";
	$item_list[] = $item;

	$item = new stdClass();
	$item->name     = "xxx_file";
	$item->value    = file_get_contents("./39cc260c6bce426033f70a09f492bff903e03fbac60fcb621d470703.png"); // it is works but it is not the best way
	$item_list[] = $item;

	$rc = make_form_data($item_list);
	if ($rc->is_ok() === false) return $rc;
	$data              = $rc->get_value()->data;
	$extra_header_list = $rc->get_value()->extra_header_list;
*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * make form-urlencoded
 * \param[in] item_list list with items
 * \return form_urlencoded
 */
function libcore__make_form_urlencoded($item_list)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$data = '';


	$item_list_size = count($item_list);
	for ($i=0; $i < $item_list_size; $i++)
	{
		if ($i !== 0)
		{
			$data .= '&';
		}


		$data .= $item_list[$i]->name;
		$data .= '=';
//		$data .= $item_list[$i]->value;


		$value_size = strlen($item_list[$i]->value);
		for ($j=0; $j < $value_size; $j++)
		{
			$ch = $item_list[$i]->value[$j];

			$hex = bin2hex(ord($ch));
			settype($hex, "string");

			if (strlen($hex) == 1)
			{
				$hex = "0".$hex;
			}
			$data .= "%".$hex;
		}
	}


	$extra_header_list = [ "Content-Type: application/x-www-form-urlencoded", "Content-Length: ".strlen($data) ];


	$value = new stdClass();
	$value->extra_header_list = $extra_header_list;
	$value->data              = $data;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
