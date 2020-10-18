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
	$item->value    = file_get_contents("./39cc260c6bce426033f70a09f492bff903e03fbac60fcb621d470703.png");
	$item->type     = "image/png";
	$item->filename = "39cc260c6bce426033f70a09f492bff903e03fbac60fcb621d470703.png";
	$item_list[] = $item;

	$rc = make_form_data($item_list);
	$form_data         = $rc->form_data;
	$form_header_list  = $rc->form_header_list;
*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * make form data
 * \param[in] item_list list with items
 * \return form_data
 */
function libcore__make_form_data($item_list)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$boundary = uniqid();
	$delimiter = '-------------' . $boundary;


	$form_data = '';
	$eol = "\r\n";


	$item_list_size = count($item_list);
	for ($i=0; $i < $item_list_size; $i++)
	{
		if (property_exists($item_list[$i], 'filename') === false)
		{

			$form_data .= "--".$delimiter.$eol;
			$form_data .= 'Content-Disposition: form-data; name="'.$item_list[$i]->name.'"'.$eol;

			if (property_exists($item_list[$i], 'type') === true)
			{
				$form_data .= 'Content-Type: '.$item_list[$i]->type.$eol;
			}

			$form_data .= $eol;
			$form_data .= $item_list[$i]->value.$eol;
		}
		else
		{
			$form_data .= "--".$delimiter.$eol;
			$form_data .= 'Content-Disposition: form-data; name="'.$item_list[$i]->name.'"; filename="'.$item_list[$i]->filename.'"'.$eol;

			if (property_exists($item_list[$i], 'type') === true)
			{
				$form_data .= 'Content-Type: '.$item_list[$i]->type.$eol;
			}

			$form_data .= 'Content-Transfer-Encoding: binary'.$eol;
			$form_data .= $eol;
			$form_data .= $item_list[$i]->value.$eol;
		}
	}


	$form_data .= "--" . $delimiter . "--".$eol;


	$form_header_list = [ "Content-Type: multipart/form-data; boundary=".$delimiter, "Content-Length: ".strlen($form_data) ];


	$value = new stdClass();
	$value->form_header_list = $form_header_list;
	$value->form_data        = $form_data;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
