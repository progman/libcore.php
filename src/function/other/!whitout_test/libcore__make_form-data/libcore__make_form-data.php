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
	if ($rc->is_ok() === false) return $rc;
	$data              = $rc->get_value()->data;
	$extra_header_list = $rc->get_value()->extra_header_list;
*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * make form-data
 * \param[in] item_list list with items
 * \return form-data
 */
function libcore__make_form-data($item_list)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$boundary = uniqid();
	$delimiter = '-------------' . $boundary;


	$data = '';
	$eol = "\r\n";


	$item_list_size = count($item_list);
	for ($i=0; $i < $item_list_size; $i++)
	{
		if (property_exists($item_list[$i], 'filename') === false)
		{

			$data .= "--".$delimiter.$eol;
			$data .= 'Content-Disposition: form-data; name="'.$item_list[$i]->name.'"'.$eol;

			if (property_exists($item_list[$i], 'type') === true)
			{
				$data .= 'Content-Type: '.$item_list[$i]->type.$eol;
			}

			$data .= $eol;
			$data .= $item_list[$i]->value.$eol;
		}
		else
		{
			$data .= "--".$delimiter.$eol;
			$data .= 'Content-Disposition: form-data; name="'.$item_list[$i]->name.'"; filename="'.$item_list[$i]->filename.'"'.$eol;

			if (property_exists($item_list[$i], 'type') === true)
			{
				$data .= 'Content-Type: '.$item_list[$i]->type.$eol;
			}

			$data .= 'Content-Transfer-Encoding: binary'.$eol;
			$data .= $eol;
			$data .= $item_list[$i]->value.$eol;
		}
	}


	$data .= "--" . $delimiter . "--".$eol;


	$form_header_list = [ "Content-Type: multipart/form-data; boundary=".$delimiter, "Content-Length: ".strlen($data) ];


	$value = new stdClass();
	$value->extra_header_list = $extra_header_list;
	$value->data              = $data;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
