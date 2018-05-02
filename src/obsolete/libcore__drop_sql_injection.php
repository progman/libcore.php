//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
function libcore__drop_sql_injection(&$obj)
{
	$type = gettype($obj);

	if ($type == "boolean")
	{
		return;
	}

	if ($type == "integer")
	{
		return;
	}

	if ($type == "double")
	{
		return;
	}

	if ($type == "float")
	{
		return;
	}

	if ($type == "resource")
	{
		return;
	}

	if ($type == "NULL")
	{
		return;
	}

	if ($type == "unknown type")
	{
		return;
	}

	if ($type == "array")
	{
		$size = count($obj);
		for ($i=0; $i < $size; $i++)
		{
			libcore__drop_sql_injection($obj[$i]);
		}
		return;
	}

	if ($type == "object")
	{
		foreach ($obj as $name => $value)
		{
			libcore__drop_sql_injection($obj->{$name});
		}
		return;
	}


	settype($obj, "string");


	$tmp = '';
	$size = strlen($obj);
	for ($i=0; $i < $size; $i++)
	{
		$ch = $obj[$i];

		if (ord($ch) == 0)
		{
			$tmp .= '\x00'; // end of string
			continue;
		}

		if (ord($ch) == 34) // double quotes '"'
		{
			$tmp .= '&#034;'; // may be "\""
			continue;
		}

		if (ord($ch) == 39) // single quote '\''
		{
			$tmp .= '&#039;'; // may be "\'"
			continue;
		}

		if (ord($ch) == 92) // backslash
		{
			$tmp .= '&#092;'; // may be "\\"
			continue;
		}

		if (ord($ch) == 26) // EOF
		{
			$tmp .= '\x1a';
			continue;
		}

		$tmp .= $ch;
	}
	$obj = $tmp;
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
