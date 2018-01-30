<?php
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// 0.5.2
// Alexey Potehin <gnuplanet@gmail.com>, http://www.gnuplanet.ru/doc/cv
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
class result_t
{
	private $flag_skip;
	private $err_code;
	private $msg;
	private $msg_private;
	private $arg_name;
	private $file_name;
	private $function_name;
	private $value;

	function get_object()
	{
		$result                = new stdClass();
		$result->err_code      = $this->get_err_code();
		$result->msg           = $this->get_msg();
		$result->msg_private   = $this->get_msg_private();
		$result->arg_name      = $this->get_arg_name();
		$result->file_name     = $this->get_file_name();
		$result->function_name = $this->get_function_name();
		return $result;
	}

	function result_t($function_name = "unknown", $file_name = "unknown")
	{
		$this->set_err(1, "unknown");

		$this->file_name     = $file_name;
		$this->function_name = $function_name;

		$this->set_value(0);

		$this->flag_skip = false;
	}
/*
	function copy($err_code, $msg, $msg_private, $arg_name, $file_name, $function_name, $value)
	{
		$this->set_err($err_code, $msg, $msg_private, $arg_name);

		$this->file_name     = $file_name;
		$this->function_name = $function_name;

		$this->set_value($value);
	}
*/
	function is_ok()
	{
		return ($this->err_code === 0) ? true : false;
	}

	function set_err($err_code = 1, $msg = "unknown", $msg_private = "", $arg_name = "")
	{
		$this->err_code     = $err_code;
		$this->msg          = $msg;
		$this->msg_private  = $msg_private;
		$this->arg_name     = $arg_name;

		if ($this->msg_private == '')
		{
			$this->msg_private = $this->msg;
		}
	}

	function set_ok()
	{
		$this->set_err(0, "ok");
	}

	function get_err_code()
	{
		return $this->err_code;
	}

	function get_msg()
	{
		return $this->msg;
	}

	function get_msg_private()
	{
		return $this->msg_private;
	}

	function get_arg_name()
	{
		return $this->arg_name;
	}

	function get_file_name()
	{
		return $this->file_name;
	}

	function get_function_name()
	{
		return $this->function_name;
	}

	function set_value($value)
	{
		$this->value = $value;
	}

	function get_value()
	{
		return $this->value;
	}

	function set_skip($flag_skip = true)
	{
		$this->flag_skip = $flag_skip;
	}
	function is_skip()
	{
		return $this->flag_skip;
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
static $libcore__hex2bin_table = array
(
//	0x00  0x01  0x02  0x03  0x04  0x05  0x06  0x07  0x08  0x09  0x0A  0x0B  0x0C  0x0D  0x0E  0x0F
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x00
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x10
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x20
	0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, null, null, null, null, null, null, // 0x30
	null, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f, null, null, null, null, null, null, null, null, null, // 0x40
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x50
	null, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f, null, null, null, null, null, null, null, null, null, // 0x60
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x70
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x80
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x90
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xA0
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xB0
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xC0
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xD0
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xE0
	null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null  // 0xF0
);
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__tojson($in)
function libcore__drop_sql_injection(&$obj)
function libcore__rnd_bin_string($size)
function libcore__rnd($min, $max)
function libcore__get_rnd()
function libcore__is_parity($val)
function libcore__is_uint($x)
function libcore__is_sint($x)
function libcore__is_hex($x, $flag_parity = false)
function libcore__is_float($x, $flag_need_point = false)
function libcore__is_flag_unset($val)
function libcore__is_flag_set($val)
function libcore__is_flag($val)
function libcore__var2flag($val, $value_default = "0")
function libcore__flag2bool($x, $value_default = false)
function libcore__flag2int($val, $value_default = 0)
function libcore__flag2str($val)
function libcore__filter_enum($value, $value_list)
function libcore__get_var($key_name, $value_default = null)
function libcore__is_var_set($key_name)
function libcore__get_var_json($key_name = null, $value_default = null)
function libcore__get_var_str($key_name, $value_default = null)
function libcore__shell_get_str($key_name, $value_default = "", $flag_drop_sql_injection = true)
function libcore__get_var_hex($key_name, $value_default = null)
function libcore__shell_get_hex($key_name, $value_default = '00')
function libcore__get_var_float($key_name, $value_default = null)
function libcore__shell_get_float($key_name, $value_default = 0)
function libcore__get_var_uint($key_name, $value_default = null)
function libcore__shell_get_uint($key_name, $value_default = 0)
function libcore__get_var_sint($key_name, $value_default = null)
function libcore__shell_get_sint($key_name, $value_default = 0)
function libcore__get_var_flag($key_name, $value_default = null)
function libcore__get_var_bool($key_name, $value_default = null)
function libcore__shell_get_flag($key_name, $value_default = "0")
function libcore__get_var_enum($key_name, $value_list)
function libcore__shell_get_enum($key_name, $value_list, $flag_drop_sql_injection = true)
function libcore__gzip_check()
function libcore__gzip_open($flag_gzip)
function libcore__gzip_close($flag_gzip)
function libcore__getmonthname($month_num, $flag_simple = false)
function libcore__convert_date($gmt_offset, $datatime)
function libcore__set_cookie($cookie_name, $cookie_value, $expired)
function libcore__unixtime2datatime($unixtime)
function libcore__make_dir($path)
function libcore__get_cache_file($filename)
function libcore__get_time_file($filename, $gmt_offset)
function libcore__blk_read($handle, $str_size)
function libcore__blk_write($handle, $str)
function libcore__file_get($filename)
function libcore__file_set($filename, $str)
function libcore__file_add($filename, $str)
function libcore__file_copy($source, $target, $flag_overwrite = false)
function libcore__do_post($url, $data, $flag_security = true, $timeout = 30)
function libcore__hex2bin($value, $flag_force = false)
function libcore__hex_string_parity($str)
function libcore__hex_string_expand($str, $size)
function libcore__hex_string_add($source, $add, $flag_check_hex = true)
//function libcore__cmp_value($v1, $v2): bool
function libcore__cmp_value($v1, $v2)
function libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, $property_type)
function libcore__cmp_object($obj1, $obj2)
function libcore__cmp_array(array $arr1, array $arr2)
function libcore__array_add($arr1, $arr2)
function libcore__array_uniq($arr)
function libcore__array_sub($arr1, $arr2)
function libcore__out($list = array(), $callback = '')
function libcore__get_data_url($filename)
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__tojson($in)
{
// http://json.org
// \u0022 - " - Unicode Character 'QUOTATION MARK' (U+0022)
// \u005c - \ - Unicode Character 'REVERSE SOLIDUS' (U+005C)
// \u002f - / - Unicode Character 'SOLIDUS' (U+002F) /
// \u0008 - b - backspace - Unicode Character 'BACKSPACE' (U+0008)
// \u000c - f - formfeed - Unicode Character 'FORM FEED (FF)' (U+000C)
// \u000a - \n newline - 'LINE FEED (LF)' (U+000A)
// \u000d - \r carriage return - 'CARRIAGE RETURN (CR)' (U+000D)
// \u0009 - \t horizontal tab - Unicode Character 'CHARACTER TABULATION' (U+0009)

	static $libcore__tojson_table = array
	(
//		0x00   0x01   0x02   0x03   0x04   0x05   0x06   0x07   0x08   0x09   0x0A   0x0B   0x0C    0x0D   0x0E   0x0F
		null,  null,  null,  null,  null,  null,  null,  null,  '\b',  '\t',  '\n',  null,  '\f',   '\r',  null,  null, // 0x00
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x10
		null,  null,  '\"',  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  '\/', // 0x20
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x30
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x40
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  "\\\\", null,  null,  null, // 0x50
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x60
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x70
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x80
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x90
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xA0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xB0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xC0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xD0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xE0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null  // 0xF0
	);

	$out = "";
	settype($in, "string");

	$size = strlen($in);
	if ($size === 0) return $out;

	for ($i=0; $i < $size; ++$i)
	{
		$ch = $in[$i];

		$x = $libcore__tojson_table[ord($ch)];
		if ($x !== null)
		{
			$out .= $x;
		}
		else
		{
			$out .= $ch;
		}
	}

	return $out;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
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
function libcore__rnd_bin_string($size)
{
	$crypto_strong = true;
	$raw = openssl_random_pseudo_bytes($size, $crypto_strong);
	if ($raw === false) return false;

	return $raw;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__rnd($min, $max)
{
	settype($min, "int");
	settype($max, "int");

	if ($min === $max)
	{
		return $min;
	}

	if ($max < $min)
	{
		$tmp = $min;
		$min = $max;
		$max = $tmp;
	}

	$rnd_size = 4;
	$rnd_max = 4294967295;

//	$crypto_strong = true;
//	$raw = openssl_random_pseudo_bytes($rnd_size, $crypto_strong);
	$raw = libcore__rnd_bin_string($rnd_size);
	if ($raw === false) return $min;

	$hex = bin2hex($raw);
	$rnd = hexdec($hex);

	$rnd = floor(($rnd/($rnd_max)) * ($max - $min + 1)) + $min;

	return ($rnd > $max) ? $max : $rnd;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_rnd()
{
	$rnd = sprintf("%08u", mt_rand(0, 99999999));
	return $rnd;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__is_parity($val)
{
	return ($val & 1) ? false : true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__is_uint($x)
{
	settype($x, "string");

	$size = strlen($x);

	if ($size === 0) return false;

	for ($i=0; $i < $size; $i++)
	{
		$ch = $x[$i];

		if
		(
			(ord($ch) >= ord('0')) && (ord($ch) <= ord('9'))
		)
		{
			continue;
		}

		return false;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__is_sint($x)
{
	settype($x, "string");

	$size = strlen($x);

	if ($size === 0) return false;

	for ($i=0; $i < $size; $i++)
	{
		$ch = $x[$i];

		if
		(
			(ord($ch) >= ord('0')) && (ord($ch) <= ord('9'))
		)
		{
			continue;
		}

		if ($i === 0)
		{
			if
			(
				(ord($ch) === ord('-')) ||
				(ord($ch) === ord('+'))
			)
			{
				continue;
			}
		}

		return false;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__is_hex($x, $flag_parity = false)
{
	global $libcore__hex2bin_table;

	settype($x, "string");

	$size = strlen($x);

	if ($size === 0) return false;

	if ($flag_parity !== false)
	{
		if (libcore__is_parity($size) === false)
		{
			return false;
		}
	}

	for ($i=0; $i < $size; $i++)
	{
		if ($libcore__hex2bin_table[ord($x[$i])] === null)
		{
			return false;
		}
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__is_float($x, $flag_need_point = false)
{
	settype($x, "string");

	$size = strlen($x);

	if ($size === 0) return false;


	$flag_point = false;
	for ($i=0; $i < $size; $i++)
	{
		$ch = $x[$i];

		if
		(
			(ord($ch) >= ord('0')) && (ord($ch) <= ord('9'))
		)
		{
			continue;
		}

		if ($flag_point === false)
		{
			if (ord($ch) === ord('.'))
			{
				if ($i === 0) // bad ".1"
				{
					return false;
				}

				if (($i + 1) === $size) // bad "1."
				{
					return false;
				}

				$flag_point = true;
				continue;
			}
		}

		return false;
	}
	if (($flag_need_point !== false) && ($flag_point === false))
	{
		return false;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// detect as unset flag: false::bool, 0::int, "false"::string, "off"::string, "0"::string
function libcore__is_flag_unset($val)
{
/*
	settype($val, "string");

	$val_low = strtolower($val);

	if
	(
		(strcmp($val_low, "false") === 0) ||
		(strcmp($val_low, "off")   === 0) ||
		(strcmp($val_low, "0")     === 0)
	)
	{
		return true;
	}

	return false;
*/


	if (is_bool($val) === true)
	{
		return ($val === false) ? true : false;
	}

	if (is_int($val) === true)
	{
		return ($val === 0) ? true : false;
	}

	if (is_string($val) === true)
	{
		$val_low = strtolower($val);

		if
		(
			(strcmp($val_low, "false") === 0) ||
			(strcmp($val_low, "off")   === 0) ||
			(strcmp($val_low, "0")     === 0)
		)
		{
			return true;
		}

		return false;
	}

	return false;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// detect as set flag: true::bool, not 0::int, "true"::string, "on"::string, "1"::string
function libcore__is_flag_set($val)
{
/*
	settype($val, "string");

	$val_low = strtolower($val);

	if
	(
		(strcmp($val_low, "true") === 0) ||
		(strcmp($val_low, "on")   === 0) ||
		(strcmp($val_low, "1")    === 0)
	)
	{
		return true;
	}

	return false;
*/

	if (is_bool($val) === true)
	{
		return ($val === true) ? true : false;
	}

	if (is_int($val) === true)
	{
		return ($val !== 0) ? true : false;
	}

	if (is_string($val) === true)
	{
		$val_low = strtolower($val);

		if
		(
			(strcmp($val_low, "true") === 0) ||
			(strcmp($val_low, "on")   === 0) ||
			(strcmp($val_low, "1")    === 0)
		)
		{
			return true;
		}

		return false;
	}

	return false;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__is_flag($val)
{
	if
	(
		(libcore__is_flag_unset($val) !== false) ||
		(libcore__is_flag_set($val)   !== false)
	)
	{
		return true;
	}

	return false;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__var2flag($val, $value_default = "0")
{
	if (libcore__is_flag($val) === false)
	{
		return $value_default;
	}

	if (libcore__is_flag_set($val) === false)
	{
		return "0";
	}

	return "1";
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__flag2bool($x, $value_default = false)
{
	if (libcore__is_flag($x) === false)
	{
		return $value_default;
	}

	if (libcore__is_flag_set($x) === false)
	{
		return false;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__flag2int($val, $value_default = 0)
{
	if (libcore__is_flag($val) === false)
	{
		return $value_default;
	}

	if (libcore__is_flag_set($val) === false)
	{
		return 0;
	}

	return 1;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__flag2str($val)
{
	if (libcore__flag2int($val) === 0)
	{
		return "false";
	}

	return "true";
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__filter_enum($value, $value_list)
{
	$value_list_size = sizeof($value_list);
	if ($value_list_size === 0)
	{
		return $value;
	}

	settype($value, "string");

	for($i=0; $i < $value_list_size; $i++)
	{
		$value_other = $value_list[$i];

		settype($value_other, "string");

		if(strcmp($value_other, $value) === 0)
		{
			return $value;
		}
	}

	return $value_list[0];
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var($key_name, $value_default = null)
{
	global $_ENV;
	global $_SERVER;
	global $_GET;
	global $_POST;
	global $_COOKIE;


	$item = new stdClass();


	if (isset($_ENV[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_ENV[$key_name];
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_SERVER[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_SERVER[$key_name];
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_GET[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_GET[$key_name];
		$item->value_original = $item->value;
		return $item;
	}

	if (isset($_POST[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_POST[$key_name];
		$item->value_original = $item->value;
		return $item;
	}


	for (;;)
	{
		$postdata = file_get_contents("php://input");
		$request = json_decode($postdata);
		if (json_last_error() !== JSON_ERROR_NONE)
		{
			break;
		}

		if (isset($request->{$key_name}) === true)
		{
			$item->flag_set       = true;
			$item->value          = $request->{$key_name};
			$item->value_original = $item->value;
			return $item;
		}

		break;
	}


	if (isset($_COOKIE[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_COOKIE[$key_name];
		$item->value_original = $item->value;
		return $item;
	}


	$item->flag_set       = false;
	$item->value          = $value_default;
	$item->value_original = null;
	return $item;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_json($key_name = null, $value_default = null)
{
	if ($key_name !== null)
	{
		$var = libcore__get_var($key_name, $value_default);
		$value_json = $var->value;
		$value = json_decode($value_json);
		if (json_last_error() !== JSON_ERROR_NONE)
		{
			$value = null;
		}
	}
	else
	{
		$value_json = file_get_contents("php://input");
		$value = json_decode($value_json);
		if (json_last_error() !== JSON_ERROR_NONE)
		{
			$value = null;
		}
	}


	if ($value === null)
	{
		return $value_default;
	}


	return $value;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_str($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if ($value === null)
	{
		return $value_default;
	}


	return $value;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__shell_get_str($key_name, $value_default = "", $flag_drop_sql_injection = true)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if ($value == '')
	{
		return $value_default;
	}


	if ($flag_drop_sql_injection == true)
	{
		libcore__drop_sql_injection($value);
	}


	return $value;
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_hex($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_hex($value) === false)
	{
		if (libcore__is_hex($value_default) === false)
		{
			return null;
		}
		return $value_default;
	}


	return $value;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__shell_get_hex($key_name, $value_default = '00')
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_hex($value) === false)
	{
		if (libcore__is_hex($value_default) === false)
		{
			return 0;
		}
		return $value_default;
	}


	return $value;
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_float($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_float($value) === false)
	{
		if (libcore__is_float($value_default) === false)
		{
			return null;
		}
		return $value_default;
	}


	return $value;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__shell_get_float($key_name, $value_default = 0)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_float($value) === false)
	{
		if (libcore__is_float($value_default) === false)
		{
			return 0;
		}
		return $value_default;
	}


	return $value;
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_uint($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_uint($value) === false)
	{
		if (libcore__is_uint($value_default) === false)
		{
			return null;
		}
		return $value_default;
	}


	return $value;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__shell_get_uint($key_name, $value_default = 0)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_uint($value) === false)
	{
		if (libcore__is_uint($value_default) === false)
		{
			return 0;
		}
		return $value_default;
	}


	return $value;
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_sint($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_sint($value) === false)
	{
		if (libcore__is_sint($value_default) === false)
		{
			return null;
		}
		return $value_default;
	}


	return $value;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__shell_get_sint($key_name, $value_default = 0)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_sint($value) === false)
	{
		if (libcore__is_sint($value_default) === false)
		{
			return 0;
		}
		return $value_default;
	}


	return $value;
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_flag($key_name, $value_default = null)
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


// if flag is set but flag is null then flag is true
	if ($var->flag_set === true)
	{
		if (is_string($var->value_original) === true)
		{
			if (strcmp($var->value_original, '') === 0)
			{
				$value = "1";
			}
		}
	}


	if (libcore__is_flag($value) === false)
	{
		if (libcore__is_flag($value_default) === false)
		{
			return null;
		}
		return $value_default;
	}


	if (libcore__is_flag_set($value) === true)
	{
		return "1";
	}


	return "0";
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_bool($key_name, $value_default = null)
{
	$value = libcore__get_var_flag($key_name, $value_default);

	return libcore__flag2bool($value, $value_default);
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__shell_get_flag($key_name, $value_default = "0")
{
	$var = libcore__get_var($key_name, $value_default);
	$value = $var->value;


	if (libcore__is_flag($value) === false)
	{
		if (libcore__is_flag($value_default) === false)
		{
			return "0";
		}
		return $value_default;
	}


	if (libcore__is_flag_set($value) === true)
	{
		return "1";
	}


	return "0";
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_var_enum($key_name, $value_list)
{
	$var = libcore__get_var_str($key_name, $value_list[0]);
	$value = $var->value;


	return libcore__filter_enum($value, $value_list);
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
function libcore__shell_get_enum($key_name, $value_list, $flag_drop_sql_injection = true)
{
	$value = libcore__shell_get_str($key_name, $value_list[0], $flag_drop_sql_injection);


	return libcore__filter_enum($value, $value_list);
}
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__gzip_check()
{
	$http_accept_encoding = libcore__get_var_str("HTTP_ACCEPT_ENCODING");


	if (strstr($http_accept_encoding, "gzip") === false)
	{
		return false;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__gzip_open($flag_gzip)
{
	if (libcore__is_flag_set($flag_gzip) === false)
	{
		return;
	}


	ob_start();
	ob_implicit_flush(0);
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__gzip_close($flag_gzip)
{
	if (libcore__is_flag_set($flag_gzip) === false)
	{
		return;
	}


	ob_implicit_flush(1);
	$contents      = ob_get_contents();
	$contents_size = ob_get_length();
	ob_end_clean();

	$contents = gzencode ($contents, 9);
	$contents_size_new = strlen($contents);


	header("Vary: Accept-Encoding");
	header("Content-Encoding: gzip");
	header("Content-Length: ".($contents_size_new));

	echo $contents;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__getmonthname($month_num, $flag_simple = false)
{
	if ($flag_simple === false)
	{
		if ($month_num ===  1) return 'января';
		if ($month_num ===  2) return 'февраля';
		if ($month_num ===  3) return 'марта';
		if ($month_num ===  4) return 'апреля';
		if ($month_num ===  5) return 'мая';
		if ($month_num ===  6) return 'июня';
		if ($month_num ===  7) return 'июля';
		if ($month_num ===  8) return 'августа';
		if ($month_num ===  9) return 'сентября';
		if ($month_num === 10) return 'октября';
		if ($month_num === 11) return 'ноября';
		if ($month_num === 12) return 'декабря';

		return 'мартобря';
	}


	if ($month_num ===  1) return 'Январь';
	if ($month_num ===  2) return 'Февраль';
	if ($month_num ===  3) return 'Март';
	if ($month_num ===  4) return 'Апрель';
	if ($month_num ===  5) return 'Май';
	if ($month_num ===  6) return 'Июнь';
	if ($month_num ===  7) return 'Июль';
	if ($month_num ===  8) return 'Август';
	if ($month_num ===  9) return 'Сентябрь';
	if ($month_num === 10) return 'Октябрь';
	if ($month_num === 11) return 'Ноябрь';
	if ($month_num === 12) return 'Декабрь';

	return 'Мартобрь';
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__convert_date($gmt_offset, $datatime)
{
	$a = strtotime($datatime);
	$a2 = gmdate('Y-m-d H:i:s', $a);
	$a3 = strtotime($a2);
	$a4 = $a3 + ($gmt_offset * 60 * 60);


	$b = date('Y-m-d H:i:s', $a4);
	$datatime = $b;


	if ($datatime == "") return '';

	if
	(
		(strtotime($datatime) > strtotime(date('Y-m-d', strtotime("now")))) &&
		(strtotime($datatime) < strtotime(date('Y-m-d', strtotime("+1 day"))))
	)
	{
		return 'Сегодня&nbsp;в&nbsp;'.date('H:i', strtotime($datatime));
	}

	if
	(
		(strtotime($datatime) < strtotime(date('Y-m-d', strtotime("now")))) &&
		(strtotime($datatime) > strtotime(date('Y-m-d', strtotime("-1 day"))))
	)
	{
		return 'Вчера&nbsp;в&nbsp;'.date('H:i', strtotime($datatime));
	}

	$str = '';
	$str = $str.date('d', strtotime($datatime));
	$str = $str.'&nbsp;';
	$str = $str.libcore__getmonthname(date('m', strtotime($datatime)));

	$year = date('Y', strtotime($datatime));
	$year_now = date('Y', strtotime("now"));

	if ($year != $year_now)
	{
		$str = $str.'&nbsp;';
		$str = $str.$year;
	}

	if (strcmp($str, '30 ноября 1999, 00:00') === 0)
	{
		return 'unknown';
	}

	return $str;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__set_cookie($cookie_name, $cookie_value, $expired)
{
	global $_COOKIE;

	setcookie($cookie_name, $cookie_value, $expired, "/");

	$_COOKIE[$cookie_name] = $cookie_value;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// '1394767999' -> '2014-03-14 03:33:19'
function libcore__unixtime2datatime($unixtime)
{
	return date('Y-m-d H:i:s', $unixtime);
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
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
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_cache_file($filename)
{
	global $_SERVER;

	$mtime = floor(microtime(true));
	for (;;)
	{
		$fd = @stat($_SERVER['DOCUMENT_ROOT'].$filename);
		if ($fd !== false)
		{
			$mtime = $fd['mtime'];
			break;
		}

		$fd = @stat($filename);
		if ($fd !== false)
		{
			$mtime = $fd['mtime'];
			break;
		}

		break;
	}

	return $filename.'?time='.$mtime;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_time_file($filename, $gmt_offset)
{
	global $_SERVER;

	$mtime = floor(microtime(true));
	for (;;)
	{
		$fd = @stat($_SERVER['DOCUMENT_ROOT'].$filename);
		if ($fd !== false)
		{
			$mtime = $fd['mtime'];
			break;
		}

		$fd = @stat($filename);
		if ($fd !== false)
		{
			$mtime = $fd['mtime'];
			break;
		}

		break;
	}

	return libcore__convert_date($gmt_offset, date('Y-m-d H:i:s', $mtime));
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__blk_read($handle, $str_size)
{
	$str = '';
	for (;;)
	{
		$read_size = $str_size - strlen($str);
		if ($read_size === 0) break;

		$rc = fread($handle, $read_size);
		if ($rc === false) return false;

		$str = $str.$rc;
	}

	return $str;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__blk_write($handle, $str)
{
	$str_size = strlen($str);
/*
	for ($i = 0; $i < $str_size; $i += $write_size)
	{
		$rc = fwrite($handle, substr($str, $i));
		if ($rc === false) return false;
		$write_size = $rc;
	}
*/
	$str_offset = 0;
	for (;;)
	{
		if ($str_size === $str_offset) break;
		$rc = fwrite($handle, substr($str, $str_offset));
		if ($rc === false) return false;
		$str_offset += $rc;
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__file_get($filename)
{
	$rc = @fopen($filename, 'rb');
	if ($rc === false) return false;
	$handle = $rc;


	$rc = @stat($filename);
	if ($rc === false) return false;
	$stat = $rc;
	$size = $stat['size'];


	$rc = libcore__blk_read($handle, $size);
	if ($rc === false) return false;
	$str = $rc;

	$rc = @fclose($handle);
	if ($rc === false) return false;

	return $str;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__file_set($filename, $str)
{
	$rc = libcore__make_dir($filename);
	if ($rc->is_ok() === false) return false;


	$rc = @fopen($filename, 'wb');
	if ($rc === false) return false;
	$handle = $rc;


	for (;;)
	{
		if (@flock($handle, LOCK_EX) === false) // set exclusive lock on file
		{
			if (@file_exists($filename) === false)
			{
				$handle = @fopen($filename, 'wb');
				if ($handle === false)
				{
					return false;
				}
			}

			usleep(100);
			continue;
		}

		break;
	}


	$rc = libcore__blk_write($handle, $str);
	if ($rc === false) return false;


	$rc = @fflush($handle);
	if ($rc === false) return false;

	$rc = @flock($handle, LOCK_UN); // file unlock
	if ($rc === false) return false;

	$rc = @fclose($handle);
	if ($rc === false) return false;


	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__file_add($filename, $str)
{
	$rc = libcore__make_dir($filename);
	if ($rc->is_ok() === false) return false;


	$rc = @fopen($filename, 'ab');
	if ($rc === false) return false;
	$handle = $rc;


	for (;;)
	{
		if (@flock($handle, LOCK_EX) === false) // file exclusive lock
		{
			if (@file_exists($filename) === false)
			{
				$handle = @fopen($filename, 'ab');
				if ($handle === false)
				{
					return false;
				}
			}

			usleep(100);
			continue;
		}

		break;
	}


	$rc = libcore__blk_write($handle, $str);
	if ($rc === false)
	{
		return false;
	}


	$rc = @fflush($handle);
	if ($rc === false) return false;

	$rc = @flock($handle, LOCK_UN); // file unlock
	if ($rc === false) return false;

	$rc = @fclose($handle);
	if ($rc === false) return false;


	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__file_copy($source, $target, $flag_overwrite = false)
{
	$rc = @stat($source);
	if ($rc === false) return false;
	$source_stat = $rc;
	$size = $source_stat['size'];


	if ($flag_overwrite === false)
	{
		$rc = @file_exists($target);
		if ($rc !== false) return false;
	}


	$rc = libcore__make_dir($target);
	if ($rc->is_ok() === false) return false;


	$rc = @fopen($source, 'rb');
	if ($rc === false) return false;
	$source_handle = $rc;


	$rc = @fopen($target.".tmp", 'wb');
	if ($rc === false) return false;
	$target_handle = $rc;


	$rc = @file_exists($target.".tmp");
	if ($rc === false) return false;


	$chunk_size = 4096;
	for (;;)
	{
		if ($size < $chunk_size) $chunk_size = $size;


		$rc = libcore__blk_read($source_handle, $chunk_size);
		if ($rc === false) return false;
		$chunk = $rc;


		$rc = libcore__blk_write($target_handle, $chunk);
		if ($rc === false) return false;

		$size -= $chunk_size;

		if ($size === 0) break;
	}


	$rc = @fflush($target_handle);
	if ($rc === false) return false;

	$rc = @fclose($target_handle);
	if ($rc === false) return false;

	$rc = @fclose($source_handle);
	if ($rc === false) return false;


	$rc = @rename($target.".tmp", $target);
	if ($rc === false) return false;


	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__do_post($url, $data, $flag_security = true, $timeout = 30, $header_list = [])
{
	$result = new result_t(__FUNCTION__, __FILE__);

	$ch = curl_init($url);
	if ($ch === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPHEADER, $header_list);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_POST, true);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPGET, false);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	if ($flag_security === true)
	{
		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, 3);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}
	}

	$rc = curl_exec($ch);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	curl_close($ch);
	$result->set_ok();
	$result->set_value($rc);
	return $result;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__hex2bin($value, $flag_force = false)
{
	$value_size = strlen($value);
	if ((round($value_size / 2) * 2) != $value_size)
	{
		$tmp = $value;
		$value = '0'.$tmp;
		$value_size++;
	}


	if (function_exists("hex2bin") === true)
	{
		if ($flag_force === false)
		{
			return hex2bin($value);
		}
	}


	$bin = '';
	for ($i=0; $i < $value_size; $i += 2)
	{
		$hex  = substr($value, $i, 2);
		$bin .= pack("H*", $hex);
	}


	return $bin;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__hex_string_parity($str)
{
	$str_size = strlen($str);
	if (libcore__is_parity($str_size) === false)
	{
		return "0".$str;
	}

	return $str;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__hex_string_expand($str, $size)
{
	$str_size = strlen($str);

	while ($str_size < $size)
	{
		$str = "0".$str;
		$str_size++;
	}

	return $str;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__hex_string_add($source, $add, $flag_check_hex = true)
{
	if ($flag_check_hex === true)
	{
		if (libcore__is_hex($source) === false)
		{
			return "00";
		}

		if (libcore__is_hex($add) === false)
		{
			return "00";
		}
	}

	$size = strlen($source);
	if ($size < strlen($add))
	{
		return libcore__hex_string_add($add, $source);
	}
	$add = libcore__hex_string_expand($add, $size);


	$carry = 0;
	for ($i=0; $i < $size; $i++)
	{
		$x = hexdec($source[$size - $i - 1]) + hexdec($add[$size - $i - 1]);

		$x += $carry;
		$carry = 0;

		if ($x > 15)
		{
			$a = floor($x / 16);
			$b = $x - ($a * 16);

			$carry = $a;
			$x = $b;
		}

		$source[$size - $i - 1] = dechex($x);

		if ((($i + 1) === $size) && ($carry !== 0))
		{
			$size++;
			$source = libcore__hex_string_expand($source, $size);
			$add    = libcore__hex_string_expand($add,    $size);
		}
	}

	$source = libcore__hex_string_parity($source);

	return $source;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// like http://php.net/manual/en/language.oop5.object-comparison.php
//function libcore__cmp_value($v1, $v2): bool
function libcore__cmp_value($v1, $v2)
{
	$type1 = gettype($v1);
	$type2 = gettype($v2);

	if (strcmp($type1, $type2) !== 0)
	{
		return false;
	}

	if (strcmp($type1, 'boolean') === 0)
	{
		return $v1 === $v2;
	}

	if (strcmp($type1, 'integer') === 0)
	{
		return $v1 === $v2;
	}

	if (strcmp($type1, 'double') === 0)
	{
		if (strcmp(((string)$v1), ((string)$v2)) === 0)
		{
			return true;
		}
		return false;
	}

	if (strcmp($type1, 'string') === 0)
	{
		if (strcmp($v1, $v2) === 0)
		{
			return true;
		}
		return false;
	}

	if (strcmp($type1, 'array') === 0)
	{
		return libcore__cmp_array($v1, $v2);
	}

	if (strcmp($type1, 'object') === 0)
	{
		return libcore__cmp_object($v1, $v2);
	}

	if (strcmp($type1, 'resource') === 0)
	{
		return false; // I do not know how compare it
	}

	if (strcmp($type1, 'NULL') === 0)
	{
		return true;
	}

	if (strcmp($type1, 'unknown type') === 0)
	{
		return false; // I do not know how compare it
	}

	return false;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, $property_type)
{
	$arrProperties1 = $objReflection1->getProperties($property_type);
	$arrProperties2 = $objReflection2->getProperties($property_type);


	$arrProperties1_size = count($arrProperties1);
	$arrProperties2_size = count($arrProperties2);

	if ($arrProperties1_size !== $arrProperties2_size)
	{
		return false;
	}


	$arr1 = array();
	for ($i=0; $i < $arrProperties1_size; $i++)
	{
		$arr1[$arrProperties1[$i]->{'name'}] = $arrProperties1[$i]->{'class'};
	}
	array_multisort($arr1);


	$arr2 = array();
	for ($i=0; $i < $arrProperties2_size; $i++)
	{
		$arr2[$arrProperties2[$i]->{'name'}] = $arrProperties2[$i]->{'class'};
	}
	array_multisort($arr2);


	if (libcore__cmp_array($arr1, $arr2) === false)
	{
		return false;
	}


	foreach ($arr1 as $key => $value)
	{
		$rc = libcore__cmp_value($obj1->{$key}, $obj2->{$key});
		if ($rc === false)
		{
			return false;
		}
	}


	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__cmp_object($obj1, $obj2)
{
	if ($obj1 != $obj2)
	{
		return false;
	}

	$objReflection1 = new ReflectionObject($obj1);
	$objReflection2 = new ReflectionObject($obj2);

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_STATIC);
	if ($rc === false) return false;

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_PUBLIC);
	if ($rc === false) return false;

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_PROTECTED);
	if ($rc === false) return false;

	$rc = libcore__cmp_object__inner($obj1, $objReflection1, $obj2, $objReflection2, ReflectionProperty::IS_PRIVATE);
	if ($rc === false) return false;

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__cmp_array(array $arr1, array $arr2)
{
	$size = count($arr1);

	if (count($arr2) !== $size)
	{
		return false;
	}

	$arrKeysInCommon = array_intersect_key($arr1, $arr2);
	if (count($arrKeysInCommon) !== $size)
	{
		return false;
	}

	$arrKeys1 = array_keys($arr1);
	$arrKeys2 = array_keys($arr2);

	$arr1flag_number = true;
	for ($i=0; $i < $size; $i++)
	{
		if (libcore__is_uint($arrKeys1[$i]) === false)
		{
			$arr1flag_number = false;
			break;
		}
	}

	$arr2flag_number = true;
	for ($i=0; $i < $size; $i++)
	{
		if (libcore__is_uint($arrKeys2[$i]) === false)
		{
			$arr2flag_number = false;
			break;
		}
	}

	if ($arr1flag_number !== $arr2flag_number)
	{
		return false;
	}

	if ($arr1flag_number === false)
	{
		array_multisort($arrKeys1);
		array_multisort($arrKeys2);

		foreach ($arrKeys1 as $key => $val)
		{
			if (strcmp($arrKeys1[$key], $arrKeys2[$key]) !== 0)
			{
				return false;
			}
		}

		foreach ($arr1 as $key => $val)
		{
			$rc = libcore__cmp_value($arr1[$key], $arr2[$key]);
			if ($rc === false)
			{
				return false;
			}
		}

		return true;
	}

	for ($i=0; $i < $size; $i++)
	{
		$rc = libcore__cmp_value($arr1[$i], $arr2[$i]);
		if ($rc === false)
		{
			return false;
		}
	}

	return true;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__array_add($arr1, $arr2)
{
	if (is_array($arr1) === false)
	{
		$arr1 = array();
	}

	if (is_array($arr2) === false)
	{
		$arr2 = array();
	}

	$tmp_list = array_merge($arr1, $arr2);

	return $tmp_list;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__array_uniq($arr)
{
	$flag_simple_array = true;
	$index = 0;
	foreach ($arr as $key => $value)
	{
		if ($key !== $index)
		{
			$flag_simple_array = false;
			break;
		}
		$index++;
	}


	$uniq_list = array_unique($arr);


	if ($flag_simple_array === false)
	{
		return $uniq_list;
	}


	$tmp_list = array();
	foreach ($uniq_list as &$value)
	{
		array_push($tmp_list, $value);
	}

	return $tmp_list;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__array_sub($arr1, $arr2)
{
	if (is_array($arr1) === false)
	{
		$arr1 = array();
	}

	if (is_array($arr2) === false)
	{
		$arr2 = array();
	}

	$arr1_size = count($arr1);
	$arr2_size = count($arr2);

	$tmp_list = array();
	for ($i=0; $i < $arr1_size; $i++)
	{
		$flag_found = false;
		for ($j=0; $j < $arr2_size; $j++)
		{
			if (libcore__cmp_value($arr1[$i], $arr2[$j]) === true)
			{
				$flag_found = true;
				break;
			}
		}
		if ($flag_found === false)
		{
			array_push($tmp_list, $arr1[$i]);
		}
	}

	return $tmp_list;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__out($list = array(), $callback = '')
{
	if ($callback != '') echo $callback."(\n";

	$obj = (object)$list;

	echo json_encode($obj, JSON_PRETTY_PRINT);

	if ($callback != '') echo ");";

	echo "\n";
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function libcore__get_data_url($filename)
{
	$rc = libcore__file_get($filename);
	if ($rc === false)
	{
		return $filename;
	}
	$body = $rc;

	$rc = base64_encode($body);
	if ($rc === false)
	{
		return $filename;
	}
	$mime = $rc;

	$mime_type = mime_content_type($filename);

	return "data:".$mime_type.";base64,".$mime;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
?>