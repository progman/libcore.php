//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * make dir
 * \param[in] path path
 * \return error flag
 */
function libcore__make_dir($path)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$dirname = dirname($path);
	if (strcmp($dirname, ".") === 0)
	{
		$result->set_ok();
		return $result;
	}
//echo "path: \"".$path."\"\n";
//echo "dirname: \"".$dirname."\"\n";


	$list = explode('/', $dirname); // get array
	$list_size = count($list);


	for (;;)
	{
		if ($list_size > 1)
		{
			if (strcmp($list[0], ".") === 0)
			{
				$tmp = [];
				for ($j = 1; $j < $list_size; $j++)
				{
					$tmp[] = $list[$j];
				}
				$list = $tmp;
				break;
			}

			if (strcmp($list[0], "") === 0)
			{
				$tmp = [];
				for ($j = 1; $j < $list_size; $j++)
				{
					if ($j === 1)
					{
						$tmp[] = "/".$list[$j];
					}
					else
					{
						$tmp[] = $list[$j];
					}
				}
				$list = $tmp;
				break;
			}
		}
		break;
	}
	$list_size = count($list);


	$path = '';
	for ($i=0; $i < $list_size; $i++)
	{
		if ($i === 0)
		{
			$path = $list[$i];
		}
		else
		{
			$path .= "/".$list[$i];
		}


//echo "mkdir: \"".$path."\"\n";
		if (@file_exists($path) === false)
		{
			if (@mkdir($path) === false)
			{
				$result->set_err(1, "don't make dir");
				return $result;
			}
		}
	}
//print_r($list);


	$result->set_ok();
	return $result;
}
/*
function libcore__make_dir($path)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	if ($path[0] != '/')
	{
		$result->set_err(1, "invalid path");
		return $result;
	}


	$dirname = dirname($path);

	$list = explode('/', $dirname); // get array
	$list_size = count($list);


	$path = '/';
	for ($i=1; $i < $list_size; $i++)
	{
		$path.=$list[$i].'/';

		if (@file_exists($path) === false)
		{
			if (@mkdir($path) === false)
			{
				$result->set_err(1, "don't make dir");
				return $result;
			}
		}
	}


	$result->set_ok();
	return $result;
}
*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//libcore__make_dir("/tmp/sub/xxx");
//libcore__make_dir("./tmp/sub/xxx");
//libcore__make_dir("tmp/sub/xxx");
//libcore__make_dir("sub/xxx");
//libcore__make_dir("./xxx");
//libcore__make_dir("xxx");
