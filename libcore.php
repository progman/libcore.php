<?php
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// 0.9.6
// Alexey Potehin <gnuplanet@gmail.com>, http://www.gnuplanet.ru/doc/cv
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// PLEASE DO NOT EDIT !!! THIS FILE IS GENERATED FROM FILES FROM DIR src BY make.sh
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * result object
 */
class result_t
{
	private $flag_skip;
	private $err_code;
	private $msg;
	private $msg_private;
	private $arg_name;
	private $file_name;
	private $line_number;
	private $function_name;
	private $value;
	private $flag_value;

	function get_object()
	{
		$result                = new stdClass();
		$result->err_code      = $this->get_err_code();
		$result->msg           = $this->get_msg();
		$result->msg_private   = $this->get_msg_private();
		$result->arg_name      = $this->get_arg_name();
		$result->file_name     = $this->get_file_name();
		$result->line_number   = $this->get_line_number();
		$result->function_name = $this->get_function_name();
		return $result;
	}

	function __construct($function_name = "unknown", $file_name = "unknown", $line_number = "unknown") // work in php5 and php7
	{
		$this->set_err(1, "unknown");

		$this->file_name     = $file_name;
		$this->line_number   = $line_number;
		$this->function_name = $function_name;

		$this->value         = null;
		$this->flag_value    = false;

		$this->flag_skip     = false;
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

	function get_line_number()
	{
		return $this->line_number;
	}

	function get_function_name()
	{
		return $this->function_name;
	}

	function is_value()
	{
		return $this->flag_value;
	}

	function set_value($value)
	{
		$this->value = $value;
		$this->flag_value = true;
	}

	function get_value()
	{
		return $this->value;
	}

	function is_skip()
	{
		return $this->flag_skip;
	}

	function set_skip($flag_skip = true)
	{
		$this->flag_skip = $flag_skip;
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
function libcore__shell_get_enum($key_name, $value_list, $flag_drop_sql_injection = true)
{
	$value = libcore__shell_get_str($key_name, $value_list[0], $flag_drop_sql_injection);


	return libcore__filter_enum($value, $value_list);
}
*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
// function is obsolete
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * add two arrays
 * \param[in] arr1 first array
 * \param[in] arr2 second array
 * \return result array
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * sub two arrays
 * \param[in] arr1 first array
 * \param[in] arr2 second array
 * \return result array
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * uniq values of array
 * \param[in] arr array
 * \return result array
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * compare two values like http://php.net/manual/en/language.oop5.object-comparison.php
 * \param[in] v1 value one
 * \param[in] v2 value two
 * \return is equal
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from flag to boolean
 * \param[in] val value
 * \param[in] value_default default value
 * \return result
 */
function libcore__flag2bool($val, $value_default = false)
{
	if (libcore__is_flag($val) === false)
	{
		return $value_default;
	}

	if (libcore__is_flag_set($val) === false)
	{
		return false;
	}

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from flag to int
 * \param[in] val value
 * \param[in] value_default default value
 * \return result
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from flag to string
 * \param[in] val value
 * \return result
 */
function libcore__flag2str($val)
{
	if (libcore__flag2int($val) === 0)
	{
		return "false";
	}

	return "true";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from hex string to bin string
 * \param[in] value hex string
 * \param[in] flag_force always use it function
 * \return bin string
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * hex string add hex string
 * \param[in] source source hex string
 * \param[in] add another hex string
 * \param[in] flag_check_hex flag for check args
 * \return hex string
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * expand hex string to destination size
 * \param[in] str hex string
 * \param[in] size destination size
 * \return hex string with new size
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * expand hex string to parity
 * \param[in] str hex string
 * \return parity hex string
 */
function libcore__hex_string_parity($str)
{
	$str_size = strlen($str);
	if (libcore__is_parity($str_size) === false)
	{
		return "0".$str;
	}

	return $str;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check is flag
 * \param[in] val source value (true::bool, not 0::int, "true"::string, "on"::string, "1"::string)
 * \return is flag
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check is flag set
 * \param[in] val source value (true::bool, not 0::int, "true"::string, "on"::string, "1"::string)
 * \param[in] flag_need_point flag_need_point
 * \return is flag set
 */
function libcore__is_flag_set($val)
{
	if (is_bool($val) === true)
	{
		return $val;
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check is flag unset
 * \param[in] val source value (false::bool, 0::int, "false"::string, "off"::string, "0"::string)
 * \param[in] flag_need_point flag_need_point
 * \return is flag set
 */
function libcore__is_flag_unset($val)
{
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check float
 * \param[in] val source value
 * \param[in] flag_need_point flag_need_point
 * \return float flag
 */
function libcore__is_float($val, $flag_need_point = false)
{
	settype($val, "string");

	$size = strlen($val);

	if ($size === 0) return false;


	$flag_point = false;
	for ($i=0; $i < $size; $i++)
	{
		$ch = $val[$i];

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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check hex string
 * \param[in] val source value
 * \param[in] flag_parity parity flag
 * \return hex string flag
 */
function libcore__is_hex($val, $flag_parity = false)
{
	$type = gettype($val);
	if
	(
		(strcmp($type, "integer") !== 0) &&
		(strcmp($type, "string")  !== 0)
	)
	{
		return false;
	}

	settype($val, "string");

	$size = strlen($val);

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
		if (libcore__is_hex_char(ord($val[$i])) === false)
		{
			return false;
		}
	}

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check parity
 * \param[in] val source value
 * \return parity flag
 */
function libcore__is_parity($val)
{
	return ($val & 1) ? false : true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check sint
 * \param[in] val source value
 * \return sint flag
 */
function libcore__is_sint($val)
{
	$type = gettype($val);
	if
	(
		(strcmp($type, "integer") !== 0) &&
		(strcmp($type, "string")  !== 0)
	)
	{
		return false;
	}

	settype($val, "string");

	$size = strlen($val);
	if ($size === 0) return false;

	for ($i=0; $i < $size; $i++)
	{
		$ch = $val[$i];

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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check uint
 * \param[in] val source value
 * \return uint flag
 */
function libcore__is_uint($val)
{
	$type = gettype($val);
	if
	(
		(strcmp($type, "integer") !== 0) &&
		(strcmp($type, "string")  !== 0)
	)
	{
		return false;
	}

	settype($val, "string");

	$size = strlen($val);
	if ($size === 0) return false;

	for ($i=0; $i < $size; $i++)
	{
		$ch = $val[$i];

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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check uuid
 * \param[in] uuid source value
 * \param[in] uuid_type type of source value
 * \return uuid flag
 */
function libcore__is_uuid($uuid, $uuid_type = 'ANY')
{
/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	if (strcmp(gettype($uuid), 'string') !== 0)
	{
		return false;
	}
	$size = strlen($uuid);


	for (;;)
	{
		if ((strcmp($uuid_type, 'TYPE38') === 0) && ($size === 38)) break;
		if ((strcmp($uuid_type, 'TYPE36') === 0) && ($size === 36)) break;
		if ((strcmp($uuid_type, 'TYPE34') === 0) && ($size === 34)) break;
		if ((strcmp($uuid_type, 'TYPE32') === 0) && ($size === 32)) break;
		if (strcmp($uuid_type, 'ANY') === 0) break;

		return false;
	}


	$template = '';

	if ($size === 38)
	{
		$template = '{xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}';
	}

	if ($size === 36)
	{
		$template = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
	}

	if ($size === 34)
	{
		$template = '{xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx}';
	}

	if ($size === 32)
	{
		$template = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
	}

	$template_size = strlen($template);
	if ($template_size === 0) return false;

	for ($i=0; $i < $template_size; $i++)
	{
		if ($template[$i] === 'x')
		{
			if (libcore__is_hex_char(ord($uuid[$i])) === false) return false;
		}
		else
		{
			if ($uuid[$i] !== $template[$i]) return false;
		}
	}

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get rnd number
 * \param[in] min min of number
 * \param[in] max max of number
 * \return rnd number
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert string for json string
 * \param[in] in input string
 * \return json string
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert any uuid type to type32
 * \param[in] uuid source value
 * \return flase if error or uuid type32
 */
function libcore__uuid2type32($uuid)
{
	if (libcore__is_uuid($uuid) === false) return false;


/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	if (strcmp(gettype($uuid), 'string') !== 0)
	{
		return false;
	}
	$size = strlen($uuid);


	$template = '';

	if ($size === 38)
	{
		$template = '{xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx}';
	}

	if ($size === 36)
	{
		$template = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
	}

	if ($size === 34)
	{
		$template = '{xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx}';
	}

	if ($size === 32)
	{
		return $uuid;
	}

	$template_size = strlen($template);
	if ($template_size === 0) return false;

	$out = '';
	for ($i=0; $i < $template_size; $i++)
	{
		if ($template[$i] === 'x')
		{
			$out .= $uuid[$i];
		}
	}

	return $out;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert any uuid type to type34
 * \param[in] uuid source value
 * \return flase if error or uuid type34
 */
function libcore__uuid2type34($uuid)
{
	if (libcore__is_uuid($uuid) === false) return false;

/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/

	$type32 = libcore__uuid2type32($uuid);


	$type34 = '{';
	$type34 = $type34.substr($type32, 0, 8);
	$type34 = $type34.substr($type32, 8, 4);
	$type34 = $type34.substr($type32, 12, 4);
	$type34 = $type34.substr($type32, 16, 4);
	$type34 = $type34.substr($type32, 20, 12);
	$type34 = $type34.'}';


	return $type34;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert any uuid type to type36
 * \param[in] uuid source value
 * \return flase if error or uuid type36
 */
function libcore__uuid2type36($uuid)
{
	if (libcore__is_uuid($uuid) === false) return false;

/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/

	$type32 = libcore__uuid2type32($uuid);


	$type36 = '';
	$type36 = $type36.substr($type32, 0, 8);
	$type36 = $type36.'-';
	$type36 = $type36.substr($type32, 8, 4);
	$type36 = $type36.'-';
	$type36 = $type36.substr($type32, 12, 4);
	$type36 = $type36.'-';
	$type36 = $type36.substr($type32, 16, 4);
	$type36 = $type36.'-';
	$type36 = $type36.substr($type32, 20, 12);


	return $type36;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert any uuid type to type38
 * \param[in] uuid source value
 * \return flase if error or uuid type38
 */
function libcore__uuid2type38($uuid)
{
	if (libcore__is_uuid($uuid) === false) return false;

/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/

	$type32 = libcore__uuid2type32($uuid);


	$type38 = '{';
	$type38 = $type38.substr($type32, 0, 8);
	$type38 = $type38.'-';
	$type38 = $type38.substr($type32, 8, 4);
	$type38 = $type38.'-';
	$type38 = $type38.substr($type32, 12, 4);
	$type38 = $type38.'-';
	$type38 = $type38.substr($type32, 16, 4);
	$type38 = $type38.'-';
	$type38 = $type38.substr($type32, 20, 12);
	$type38 = $type38.'}';


	return $type38;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from val to flag
 * \param[in] val value
 * \param[in] value_default default value
 * \return flag
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * read block from file
 * \param[in] handle handle of file
 * \param[in] size size of block
 * \return block or error
 */
function libcore__blk_read($handle, $size)
{
	$str = '';
	for (;;)
	{
		$next_size = $size - strlen($str);
		if ($next_size === 0) break;

		$rc = fread($handle, $next_size);
		if ($rc === false) return false;

		$str = $str.$rc;
	}

	return $str;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * write block to file
 * \param[in] handle handle of file
 * \param[in] str str for writing
 * \return write status
 */
function libcore__blk_write($handle, $str)
{
	$str_size = strlen($str);
	$str_offset = 0;


// maybe we read all in first time
	if ($str_size === $str_offset) return true;
	$rc = @fwrite($handle, $str); // write without substr
	if ($rc === false) return false;
	$str_offset += $rc;


// it if we did not read all in first time
	for (;;)
	{
		if ($str_size === $str_offset) break;
		$rc = @fwrite($handle, substr($str, $str_offset));
		if ($rc === false) return false;
		$str_offset += $rc;
	}


	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * compare two arrays like http://php.net/manual/en/language.oop5.object-comparison.php
 * \param[in] arr1 array one
 * \param[in] arr2 array two
 * \return is equal
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * compare two objects like http://php.net/manual/en/language.oop5.object-comparison.php
 * \param[in] obj1 object one
 * \param[in] objReflection1 reflection of object one
 * \param[in] obj2 object two
 * \param[in] objReflection2 reflection of object two
 * \param[in] property_type type of property
 * \return is equal
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * compare two objects like http://php.net/manual/en/language.oop5.object-comparison.php
 * \param[in] v1 object one
 * \param[in] v2 object two
 * \return is equal
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * add string to file
 * \param[in] filename name of file
 * \param[in] str string
 * \param[in] flag_overwrite will over write this file?
 * \return status
 */
function libcore__file_add($filename, $str, $flag_overwrite = true)
{
	if (@file_exists($filename) === true)
	{
		if ($flag_overwrite === false) return true;
	}


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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * copy file to file
 * \param[in] source name of source file
 * \param[in] target name of target file
 * \param[in] flag_overwrite flag of overwriting target file
 * \return status
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get file body
 * \param[in] filename name of file
 * \return file body
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * write file from string
 * \param[in] filename name of file
 * \param[in] str string
 * \param[in] flag_overwrite will over write this file?
 * \return status
 */
function libcore__file_set($filename, $str, $flag_overwrite = true)
{
	if (@file_exists($filename) === true)
	{
		if ($flag_overwrite === false) return true;
	}


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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * filter value
 * \param[in] value value
 * \param[in] value_list value list
 * \return filtered value
 */
function libcore__filter_enum($value, $value_list)
{
	$value_list_size = sizeof($value_list);
	if ($value_list_size === 0)
	{
		return $value;
	}

	settype($value, "string");

	for ($i=0; $i < $value_list_size; $i++)
	{
		$value_other = $value_list[$i];

		settype($value_other, "string");

		if (strcmp($value_other, $value) === 0)
		{
			return $value;
		}
	}

	return $value_list[0];
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get file modify time for control web cache of browser
 * \param[in] filename file name
 * \return URL with timestamp
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get base64 body of file
 * \param[in] filename file name
 * \return base64 body of file
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get rnd string
 * \return rnd string
 */
function libcore__get_rnd()
{
	$rnd = sprintf("%08u", mt_rand(0, 99999999));
	return $rnd;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get humanable string of date of file
 * \param[in] filename file name
 * \param[in] gmt_offset time shift of GMT
 * \return humanable string of date of file
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * is browser accept gzip
 * \return is browser accept gzip
 */
function libcore__gzip_check()
{
	$http_accept_encoding = libcore__get_var_str("HTTP_ACCEPT_ENCODING");

	if (strstr($http_accept_encoding, "gzip") === false)
	{
		return false;
	}

	return true;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * close to gzip page
 * \param[in] flag_gzip is page gziping
 * \return gziped page
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * perform http get
 * \param[in] arg arguments for query
 * \return result
 */
function libcore__http_get($arg)
{
	$result = new result_t(__FUNCTION__, __FILE__);


// check args
	if (@is_bool($arg->flag_verbose) === false)
	{
		$arg->flag_verbose = false;
	}
	if (@is_bool($arg->flag_failonerror) === false)
	{
		$arg->flag_failonerror = false;
	}
	if (@is_string($arg->url) === false)
	{
		$result->set_err(1, 'url is not set');
		return $result;
	}
	if (@is_bool($arg->flag_security) === false)
	{
		$arg->flag_security = true;
	}
	if (@isset($arg->timeout) === false)
	{
		$arg->timeout = 30;
	}
	if (@is_array($arg->header_list) === false)
	{
		$arg->header_list = [];
	}
	if (@is_string($arg->referer) === false)
	{
		$arg->referer = "";
	}
	if (@is_string($arg->ssl_cert) === false)
	{
		$arg->ssl_cert = "";
	}
	if (@is_string($arg->ssl_cert_type) === false)
	{
		$arg->ssl_cert_type = "";
	}
	if (@is_string($arg->ssl_key) === false)
	{
		$arg->ssl_key = "";
	}


// header callback function
	$output_header_list = [];
	$header_callback = function ($ch, $header_line) use (&$output_header_list)
	{
		$header_line_size1 = strlen($header_line);
		$header_line = str_replace(array("\n", "\r"), '', $header_line);
		$header_line_size2 = strlen($header_line);

		if ($header_line_size2 !== 0)
		{
			array_push($output_header_list, $header_line);
		}

//		echo $header_line;
		return $header_line_size1;
	};


	$rc = curl_init();
	if ($rc === false)
	{
		$result->set_err(1, 'curl is not init');
		return $result;
	}
	$ch = $rc;

	$rc = curl_setopt($ch, CURLOPT_VERBOSE, $arg->flag_verbose);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_FAILONERROR, $arg->flag_failonerror);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_URL, $arg->url);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPHEADER, $arg->header_list);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_POST, 0);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPGET, 1);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HEADERFUNCTION, $header_callback);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_TIMEOUT, $arg->timeout);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	if (strcmp($arg->referer, "") !== 0)
	{
		$rc = curl_setopt($ch, CURLOPT_REFERER, $arg->referer);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}
	}

	if ($arg->flag_security === true)
	{
//		$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
		$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

//		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, 3);
//		if ($rc === false)
//		{
//			$result->set_err(1, curl_error($ch));
//			curl_close($ch);
//			return $result;
//		}

//		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		if (strcmp($arg->ssl_cert, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLCERT, $arg->ssl_cert);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}

		if (strcmp($arg->ssl_cert_type, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLCERTTYPE, $arg->ssl_cert_type);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}

		if (strcmp($arg->ssl_key, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLKEY, $arg->ssl_key);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}
	}

	$rc = curl_exec($ch);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}
	$output_body = $rc;

	curl_close($ch);


//	print_r($output_header_list);


	$answer = new stdClass();
	$answer->body = $output_body;
	$answer->head = $output_header_list;


	$result->set_ok();
	$result->set_value($answer);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * perform http post
 * \param[in] arg arguments for query
 * \return result
 */
function libcore__http_post($arg)
{
	$result = new result_t(__FUNCTION__, __FILE__);


// check args
	if (@is_bool($arg->flag_verbose) === false)
	{
		$arg->flag_verbose = false;
	}
	if (@is_bool($arg->flag_failonerror) === false)
	{
		$arg->flag_failonerror = false;
	}
	if (@is_string($arg->url) === false)
	{
		$result->set_err(1, 'url is not set');
		return $result;
	}
	if (@isset($arg->data) === false)
	{
		$arg->data = '';
	}
	if (@is_bool($arg->flag_security) === false)
	{
		$arg->flag_security = true;
	}
	if (@isset($arg->timeout) === false)
	{
		$arg->timeout = 30;
	}
	if (@is_array($arg->header_list) === false)
	{
		$arg->header_list = [];
	}
	if (@is_string($arg->referer) === false)
	{
		$arg->referer = "";
	}
	if (@is_string($arg->ssl_cert) === false)
	{
		$arg->ssl_cert = "";
	}
	if (@is_string($arg->ssl_cert_type) === false)
	{
		$arg->ssl_cert_type = "";
	}
	if (@is_string($arg->ssl_key) === false)
	{
		$arg->ssl_key = "";
	}


// header callback function
	$output_header_list = [];
	$header_callback = function ($ch, $header_line) use (&$output_header_list)
	{
		$header_line_size1 = strlen($header_line);
		$header_line = str_replace(array("\n", "\r"), '', $header_line);
		$header_line_size2 = strlen($header_line);

		if ($header_line_size2 !== 0)
		{
			array_push($output_header_list, $header_line);
		}

//		echo $header_line;
		return $header_line_size1;
	};


	$rc = curl_init();
	if ($rc === false)
	{
		$result->set_err(1, 'curl is not init');
		return $result;
	}
	$ch = $rc;

	$rc = curl_setopt($ch, CURLOPT_VERBOSE, $arg->flag_verbose);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_FAILONERROR, $arg->flag_failonerror);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_URL, $arg->url);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPHEADER, $arg->header_list);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_POST, 1);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_POSTFIELDS, $arg->data);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HTTPGET, 0);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_HEADERFUNCTION, $header_callback);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	$rc = curl_setopt($ch, CURLOPT_TIMEOUT, $arg->timeout);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}

	if (strcmp($arg->referer, "") !== 0)
	{
		$rc = curl_setopt($ch, CURLOPT_REFERER, $arg->referer);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}
	}

	if ($arg->flag_security === true)
	{
//		$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'SSLv3');
		$rc = curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

//		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, 3);
//		if ($rc === false)
//		{
//			$result->set_err(1, curl_error($ch));
//			curl_close($ch);
//			return $result;
//		}

//		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
		$rc = curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		$rc = curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
		if ($rc === false)
		{
			$result->set_err(1, curl_error($ch));
			curl_close($ch);
			return $result;
		}

		if (strcmp($arg->ssl_cert, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLCERT, $arg->ssl_cert);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}

		if (strcmp($arg->ssl_cert_type, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLCERTTYPE, $arg->ssl_cert_type);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}

		if (strcmp($arg->ssl_key, "") !== 0)
		{
			$rc = curl_setopt($ch, CURLOPT_SSLKEY, $arg->ssl_key);
			if ($rc === false)
			{
				$result->set_err(1, curl_error($ch));
				curl_close($ch);
				return $result;
			}
		}
	}

	$rc = curl_exec($ch);
	if ($rc === false)
	{
		$result->set_err(1, curl_error($ch));
		curl_close($ch);
		return $result;
	}
	$output_body = $rc;

	curl_close($ch);


//	print_r($output_header_list);


	$answer = new stdClass();
	$answer->body = $output_body;
	$answer->head = $output_header_list;


	$result->set_ok();
	$result->set_value($answer);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check hex char
 * \param[in] val source value
 * \return hex char flag
 */
function libcore__is_hex_char($val)
{
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


	if (strcmp(gettype($val), 'integer') !== 0)
	{
		return false;
	}


	if
	(
		($val < 0) ||
		($val > 255)
	)
	{
		return false;
	}


	if ($libcore__hex2bin_table[$val] !== null) return true;


	return false;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * make dir
 * \param[in] path path
 * \return error flag
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * make output json
 * \param[in] list output object list
 * \param[in] callback JSONP callback
 * \return output json
 */
function libcore__out($list = array(), $callback = '')
{
	if ($callback != '')
	{
		if ($callback != '?')
		{
			echo $callback."(\n";
		}
	}

	$obj = (object)$list;

	echo json_encode($obj, JSON_PRETTY_PRINT);

	if ($callback != '')
	{
		if ($callback != '?')
		{
			echo ");";
		}
	}

	echo "\n";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get rnd bin string
 * \param[in] size count of bytes
 * \return rnd bin string
 */
function libcore__rnd_bin_string($size)
{
	$crypto_strong = true;
	$raw = openssl_random_pseudo_bytes($size, $crypto_strong);
	if ($raw === false) return false;

	return $raw;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get bool var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_bool($key_name, $value_default = null)
{
	$value = libcore__get_var_flag($key_name, $value_default);

	return libcore__flag2bool($value, $value_default);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE... and filtred it
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var_enum($key_name, $value_list = null)
{
	$value_default = null;

	if (strcmp(gettype($value_list), 'array') === 0)
	{
		if (count($value_list) !== 0)
		{
			$value_default = $value_list[0];
		}
	}

	$value = libcore__get_var_str($key_name, $value_default);

	return libcore__filter_enum($value, $value_list);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get flag var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get float var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get hex var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get json var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get var from $_ENV or $_SERVER or $_GET or $_POST or $_FILES or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
function libcore__get_var($key_name, $value_default = null)
{
	global $_ENV;
	global $_SERVER;
	global $_GET;
	global $_POST;
	global $_FILES;
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

	if (isset($_FILES[$key_name]) === true)
	{
		$item->flag_set       = true;
		$item->value          = $_FILES[$key_name];
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get sint var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get str var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get uint var from $_ENV or $_SERVER or $_GET or $_POST or php://input or $_COOKIE
 * \param[in] key_name name of key
 * \param[in] value_default default value if key is not found
 * \return value of key
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from daymicrotime_text to daymicrotime, from "23:59:59.999999" to 86399999999
 * \param[in] daymicrotime_text like "23:59:59.999999"
 * \return result like 86399999999 or FALSE if args are bad
 */
function libcore__daymicrotime_text_to_daymicrotime($daymicrotime_text)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	$rc = libcore__parse_daymicrotime_text($daymicrotime_text);
	if ($rc->is_ok() === false) return $rc;
	$value = $rc->get_value();

	$hour     = $value->hour;
	$min      = $value->min;
	$sec      = $value->sec;
	$microsec = $value->microsec;


	$value = ((($hour * 60 * 60) + ($min * 60) + $sec) * 1000000) + $microsec;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get unixmicrotime
 * \param[in] flag_utc use UTC timezone
 * \return unixmicrotime
 */
function libcore__get_unixmicrotime($flag_utc = false)
{
	$unixmicrotime = "0000000000000000";


	$tz = date_default_timezone_get();
//echo "tz:".$tz."\n";

	if ($flag_utc !== false)
	{
		if (date_default_timezone_set("UTC") === false)
		{
			return $unixmicrotime;
		}
	}


	list($part2, $part1) = explode(" ", microtime());
//echo "part1:".$part1."\n";
//echo "part2:".$part2."\n";


	if ($flag_utc !== false)
	{
		if (date_default_timezone_set($tz) === false)
		{
			return $unixmicrotime;
		}
	}


	if (strlen($part2) != 10)
	{
		return $unixmicrotime;
	}
	if ($part2[0] != '0')
	{
		return $unixmicrotime;
	}
	if ($part2[1] != '.')
	{
		return $unixmicrotime;
	}


	$microsec = substr($part2, 2, 6);
//echo "microsec:".$microsec."\n";


	$unixmicrotime = $part1.$microsec;
//echo "unixmicrotime:".$unixmicrotime."\n";


	for (;;)
	{
		if (strlen($unixmicrotime) >= 16) break;
		$unixmicrotime = "0".$unixmicrotime;
	}
//echo "unixmicrotime:".$unixmicrotime."\n";


	return $unixmicrotime;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get unixtime
 * \param[in] flag_utc use UTC timezone
 * \return unixtime
 */
function libcore__get_unixtime($flag_utc = false)
{
	$unixtime = "0000000000";


	$tz = date_default_timezone_get();
//echo "tz:".$tz."\n";

	if ($flag_utc !== false)
	{
		if (date_default_timezone_set("UTC") === false)
		{
			return $unixtime;
		}
	}


	$unixtime = time();


	if ($flag_utc !== false)
	{
		if (date_default_timezone_set($tz) === false)
		{
			return $unixtime;
		}
	}


	return $unixtime;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert iso8601 to GMT unixmicrotime, from "2017-10-16T10:36:17.31004+0000" to "1508150177310040"
 * \param[in] iso8601 time like 2017-10-16T10:36:17.31004+0000
 * \return result GMT unixmicrotime of false if error
 */
function libcore__iso8601_to_unixmicrotime($iso8601)
{
	$filter_list = [
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDD'                         ], // 20050809							9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDZ'                        ], // 20050809							9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss'                  ], // 20050809T183142					9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u'                ], // 20050809T183142.1				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu'               ], // 20050809T183142.21				9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu'              ], // 20050809T183142.321				9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu'             ], // 20050809T183142.4321				9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu'            ], // 20050809T183142.54321			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu'           ], // 20050809T183142.654321			9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmssZ'                 ], // 20050809T183142					9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uZ'               ], // 20050809T183142.1				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuZ'              ], // 20050809T183142.21				9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuZ'             ], // 20050809T183142.321				9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuZ'            ], // 20050809T183142.4321				9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuZ'           ], // 20050809T183142.54321			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuuZ'          ], // 20050809T183142.654321			9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HH'               ], // 20050809T183142+03				9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HH'             ], // 20050809T183142.1+03				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HH'            ], // 20050809T183142.21+03			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HH'           ], // 20050809T183142.321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HH'          ], // 20050809T183142.4321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HH'         ], // 20050809T183142.54321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HH'        ], // 20050809T183142.654321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HHQQ'             ], // 20050809T183142+0330				9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HHQQ'           ], // 20050809T183142.1+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HHQQ'          ], // 20050809T183142.21+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HHQQ'         ], // 20050809T183142.321+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HHQQ'        ], // 20050809T183142.4321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HHQQ'       ], // 20050809T183142.54321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HHQQ'      ], // 20050809T183142.654321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HH:QQ'            ], // 20050809T183142+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HH:QQ'          ], // 20050809T183142.1+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HH:QQ'         ], // 20050809T183142.21+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HH:QQ'        ], // 20050809T183142.321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HH:QQ'       ], // 20050809T183142.4321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HH:QQ'      ], // 20050809T183142.54321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HH:QQ'     ], // 20050809T183142.654321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HH'               ], // 20050809T183142-03				9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HH'             ], // 20050809T183142.1-03				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HH'            ], // 20050809T183142.21-03			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HH'           ], // 20050809T183142.321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HH'          ], // 20050809T183142.4321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HH'         ], // 20050809T183142.54321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HH'        ], // 20050809T183142.654321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HHQQ'             ], // 20050809T183142-0330				9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HHQQ'           ], // 20050809T183142.1-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HHQQ'          ], // 20050809T183142.21-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HHQQ'         ], // 20050809T183142.321-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HHQQ'        ], // 20050809T183142.4321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HHQQ'       ], // 20050809T183142.54321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HHQQ'      ], // 20050809T183142.654321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HH:QQ'            ], // 20050809T183142-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HH:QQ'          ], // 20050809T183142.1-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HH:QQ'         ], // 20050809T183142.21-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HH:QQ'        ], // 20050809T183142.321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HH:QQ'       ], // 20050809T183142.4321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HH:QQ'      ], // 20050809T183142.54321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HH:QQ'     ], // 20050809T183142.654321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD'                       ], // 2005-08-09						9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDZ'                      ], // 2005-08-09						9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss'              ], // 2005-08-09T18:31:42				9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u'            ], // 2005-08-09T18:31:42.1			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu'           ], // 2005-08-09T18:31:42.21			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu'          ], // 2005-08-09T18:31:42.321			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu'         ], // 2005-08-09T18:31:42.4321			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu'        ], // 2005-08-09T18:31:42.54321		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu'       ], // 2005-08-09T18:31:42.654321		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ssZ'             ], // 2005-08-09T18:31:42				9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uZ'           ], // 2005-08-09T18:31:42.1			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuZ'          ], // 2005-08-09T18:31:42.21			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuZ'         ], // 2005-08-09T18:31:42.321			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuZ'        ], // 2005-08-09T18:31:42.4321			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuZ'       ], // 2005-08-09T18:31:42.54321		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuuZ'      ], // 2005-08-09T18:31:42.654321		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HH'           ], // 2005-08-09T18:31:42+03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HH'         ], // 2005-08-09T18:31:42.1+03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HH'        ], // 2005-08-09T18:31:42.21+03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HH'       ], // 2005-08-09T18:31:42.321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HH'      ], // 2005-08-09T18:31:42.4321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HH'     ], // 2005-08-09T18:31:42.54321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HH'    ], // 2005-08-09T18:31:42.654321+03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HHQQ'         ], // 2005-08-09T18:31:42+0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HHQQ'       ], // 2005-08-09T18:31:42.1+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HHQQ'      ], // 2005-08-09T18:31:42.21+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HHQQ'     ], // 2005-08-09T18:31:42.321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HHQQ'    ], // 2005-08-09T18:31:42.4321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HHQQ'   ], // 2005-08-09T18:31:42.54321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HHQQ'  ], // 2005-08-09T18:31:42.654321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HH:QQ'        ], // 2005-08-09T18:31:42+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HH:QQ'      ], // 2005-08-09T18:31:42.1+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HH:QQ'     ], // 2005-08-09T18:31:42.21+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HH:QQ'    ], // 2005-08-09T18:31:42.321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HH:QQ'   ], // 2005-08-09T18:31:42.4321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HH:QQ'  ], // 2005-08-09T18:31:42.54321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HH:QQ' ], // 2005-08-09T18:31:42.654321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HH'           ], // 2005-08-09T18:31:42-03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HH'         ], // 2005-08-09T18:31:42.1-03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HH'        ], // 2005-08-09T18:31:42.21-03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HH'       ], // 2005-08-09T18:31:42.321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HH'      ], // 2005-08-09T18:31:42.4321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HH'     ], // 2005-08-09T18:31:42.54321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HH'    ], // 2005-08-09T18:31:42.654321-03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HHQQ'         ], // 2005-08-09T18:31:42-0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HHQQ'       ], // 2005-08-09T18:31:42.1-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HHQQ'      ], // 2005-08-09T18:31:42.21-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HHQQ'     ], // 2005-08-09T18:31:42.321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HHQQ'    ], // 2005-08-09T18:31:42.4321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HHQQ'   ], // 2005-08-09T18:31:42.54321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HHQQ'  ], // 2005-08-09T18:31:42.654321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HH:QQ'        ], // 2005-08-09T18:31:42-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HH:QQ'      ], // 2005-08-09T18:31:42.1-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HH:QQ'     ], // 2005-08-09T18:31:42.21-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HH:QQ'    ], // 2005-08-09T18:31:42.321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HH:QQ'   ], // 2005-08-09T18:31:42.4321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HH:QQ'  ], // 2005-08-09T18:31:42.54321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HH:QQ' ], // 2005-08-09T18:31:42.654321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss'              ], // 2005-08-09 18:31:42				9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u'            ], // 2005-08-09 18:31:42.1			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu'           ], // 2005-08-09 18:31:42.21			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu'          ], // 2005-08-09 18:31:42.321			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu'         ], // 2005-08-09 18:31:42.4321			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu'        ], // 2005-08-09 18:31:42.54321		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu'       ], // 2005-08-09 18:31:42.654321		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ssZ'             ], // 2005-08-09 18:31:42				9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uZ'           ], // 2005-08-09 18:31:42.1			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuZ'          ], // 2005-08-09 18:31:42.21			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuZ'         ], // 2005-08-09 18:31:42.321			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuZ'        ], // 2005-08-09 18:31:42.4321			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuZ'       ], // 2005-08-09 18:31:42.54321		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuuZ'      ], // 2005-08-09 18:31:42.654321		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss+HH'           ], // 2005-08-09 18:31:42+03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u+HH'         ], // 2005-08-09 18:31:42.1+03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu+HH'        ], // 2005-08-09 18:31:42.21+03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu+HH'       ], // 2005-08-09 18:31:42.321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu+HH'      ], // 2005-08-09 18:31:42.4321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu+HH'     ], // 2005-08-09 18:31:42.54321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu+HH'    ], // 2005-08-09 18:31:42.654321+03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss+HHQQ'         ], // 2005-08-09 18:31:42+0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u+HHQQ'       ], // 2005-08-09 18:31:42.1+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu+HHQQ'      ], // 2005-08-09 18:31:42.21+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu+HHQQ'     ], // 2005-08-09 18:31:42.321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu+HHQQ'    ], // 2005-08-09 18:31:42.4321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu+HHQQ'   ], // 2005-08-09 18:31:42.54321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu+HHQQ'  ], // 2005-08-09 18:31:42.654321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss+HH:QQ'        ], // 2005-08-09 18:31:42+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u+HH:QQ'      ], // 2005-08-09 18:31:42.1+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu+HH:QQ'     ], // 2005-08-09 18:31:42.21+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu+HH:QQ'    ], // 2005-08-09 18:31:42.321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu+HH:QQ'   ], // 2005-08-09 18:31:42.4321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu+HH:QQ'  ], // 2005-08-09 18:31:42.54321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu+HH:QQ' ], // 2005-08-09 18:31:42.654321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss-HH'           ], // 2005-08-09 18:31:42-03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u-HH'         ], // 2005-08-09 18:31:42.1-03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu-HH'        ], // 2005-08-09 18:31:42.21-03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu-HH'       ], // 2005-08-09 18:31:42.321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu-HH'      ], // 2005-08-09 18:31:42.4321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu-HH'     ], // 2005-08-09 18:31:42.54321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu-HH'    ], // 2005-08-09 18:31:42.654321-03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss-HHQQ'         ], // 2005-08-09 18:31:42-0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u-HHQQ'       ], // 2005-08-09 18:31:42.1-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu-HHQQ'      ], // 2005-08-09 18:31:42.21-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu-HHQQ'     ], // 2005-08-09 18:31:42.321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu-HHQQ'    ], // 2005-08-09 18:31:42.4321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu-HHQQ'   ], // 2005-08-09 18:31:42.54321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu-HHQQ'  ], // 2005-08-09 18:31:42.654321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss-HH:QQ'        ], // 2005-08-09 18:31:42-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u-HH:QQ'      ], // 2005-08-09 18:31:42.1-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu-HH:QQ'     ], // 2005-08-09 18:31:42.21-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu-HH:QQ'    ], // 2005-08-09 18:31:42.321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu-HH:QQ'   ], // 2005-08-09 18:31:42.4321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu-HH:QQ'  ], // 2005-08-09 18:31:42.54321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu-HH:QQ' ], // 2005-08-09 18:31:42.654321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут
	];
	$filter_list_size = count($filter_list);


	for ($i=0; $i < $filter_list_size; $i++)
	{
		$filter_list[$i]['flag_enable'] = true;
		$filter_list[$i]['out'] = [];
		$filter_list[$i]['out']['year'] = '';
		$filter_list[$i]['out']['month'] = '';
		$filter_list[$i]['out']['day'] = '';
		$filter_list[$i]['out']['hour'] = '';
		$filter_list[$i]['out']['min'] = '';
		$filter_list[$i]['out']['sec'] = '';
		$filter_list[$i]['out']['microsec'] = '';
		$filter_list[$i]['out']['gmt_offset_hour'] = '';
		$filter_list[$i]['out']['gmt_offset_min'] = '';
	}


	$iso8601_size = strlen($iso8601);

	$flag_found = false;
	for ($i=0; $i < $filter_list_size; $i++)
	{
		$filter_size = strlen($filter_list[$i]['filter']);

		if ($filter_size !== $iso8601_size)
		{
			$filter_list[$i]['flag_enable'] = false;
		}
		else
		{
			$flag_found = true;
		}
	}
	if ($flag_found === false)
	{
		return false;
	}


	for ($i=0; $i < $iso8601_size; $i++)
	{
		for ($j=0; $j < $filter_list_size; $j++)
		{
			if ($filter_list[$j]['flag_enable'] === false) continue;

			$ch = $filter_list[$j]['filter'][$i];
			settype($ch, "string");

			for (;;)
			{
				if
				(
					(strcmp($ch, "Y") === 0) ||
					(strcmp($ch, "M") === 0) ||
					(strcmp($ch, "D") === 0) ||
					(strcmp($ch, "h") === 0) ||
					(strcmp($ch, "m") === 0) ||
					(strcmp($ch, "s") === 0) ||
					(strcmp($ch, "u") === 0) ||
					(strcmp($ch, "H") === 0) ||
					(strcmp($ch, "Q") === 0)
				)
				{
					if (libcore__is_uint($iso8601[$i]) === false)
					{
						$filter_list[$j]['flag_enable'] = false;
						break;
					}
				}
				if (strcmp($ch, "Y") === 0)
				{
					$filter_list[$j]['out']['year'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "M") === 0)
				{
					$filter_list[$j]['out']['month'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "D") === 0)
				{
					$filter_list[$j]['out']['day'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "h") === 0)
				{
					$filter_list[$j]['out']['hour'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "m") === 0)
				{
					$filter_list[$j]['out']['min'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "s") === 0)
				{
					$filter_list[$j]['out']['sec'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "u") === 0)
				{
					$filter_list[$j]['out']['microsec'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "H") === 0)
				{
					$filter_list[$j]['out']['gmt_offset_hour'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "Q") === 0)
				{
					$filter_list[$j]['out']['gmt_offset_min'] .= $iso8601[$i];
					break;
				}
				if (strcmp($filter_list[$j]['filter'][$i], $iso8601[$i]) !== 0)
				{
					$filter_list[$j]['flag_enable'] = false;
					break;
				}
				break;
			}
		}
	}


	$count = 0;
	$index = -1;
	for ($i=0; $i < $filter_list_size; $i++)
	{
		if ($filter_list[$i]['flag_enable'] === false) continue;

		$index = $i;
		$count++;
	}
	if ($count !== 1)
	{
		return false;
	}


	$year            = $filter_list[$index]['out']['year'];
	$month           = $filter_list[$index]['out']['month'];
	$day             = $filter_list[$index]['out']['day'];
	$hour            = $filter_list[$index]['out']['hour'];
	$min             = $filter_list[$index]['out']['min'];
	$sec             = $filter_list[$index]['out']['sec'];
	$microsec        = $filter_list[$index]['out']['microsec'];
	$gmt_offset_sign = $filter_list[$index]['gmt_offset_sign'];
	$gmt_offset_hour = $filter_list[$index]['out']['gmt_offset_hour'];
	$gmt_offset_min  = $filter_list[$index]['out']['gmt_offset_min'];


	if (strcmp($year,            '') === 0) $year            = '0';
	if (strcmp($month,           '') === 0) $month           = '0';
	if (strcmp($day,             '') === 0) $day             = '0';
	if (strcmp($hour,            '') === 0) $hour            = '0';
	if (strcmp($min,             '') === 0) $min             = '0';
	if (strcmp($sec,             '') === 0) $sec             = '0';
	if (strcmp($microsec,        '') === 0) $microsec        = '0';
	if (strcmp($gmt_offset_hour, '') === 0) $gmt_offset_hour = '0';
	if (strcmp($gmt_offset_min,  '') === 0) $gmt_offset_min  = '0';

/*
	echo "iso8601:".$iso8601."\n";
	echo "year:".$year."\n";
	echo "month:".$month."\n";
	echo "day:".$day."\n";
	echo "hour:".$hour."\n";
	echo "min:".$min."\n";
	echo "sec:".$sec."\n";
	echo "microsec:".$microsec."\n";
	echo "gmt_offset_hour:".$gmt_offset_hour."\n";
	echo "gmt_offset_min:".$gmt_offset_min."\n";
*/

	$unixtime = gmmktime($hour, $min, $sec, $month, $day, $year);


	$gmt_offset = ($gmt_offset_hour * 60 * 60) + ($gmt_offset_min * 60);


	if (strcmp($gmt_offset_sign, '+') === 0)
	{
		$unixtime = $unixtime - $gmt_offset;
	}
	else
	{
		$unixtime = $unixtime + $gmt_offset;
	}

	$unixmicrotime = ($unixtime * 1000000) + $microsec;


	for (;;)
	{
		if (strlen($unixmicrotime) === 16) break;

		$unixmicrotime = "0".$unixmicrotime;
	}


	return $unixmicrotime;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from daymicrotime_text to parts, from "23:59:59.999999" to hour, min, sec, microsec
 * \param[in] daymicrotime_text like "23:59:59.999999"
 * \return result as hour, min, sec, microsec or FALSE if args are bad
 */
function libcore__parse_daymicrotime_text($daymicrotime_text)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	settype($daymicrotime_text, "string");

//0         1
//012345678901234
//23:59:59.999999

	if (ord($daymicrotime_text[2]) !== ord(':'))
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (ord($daymicrotime_text[5]) !== ord(':'))
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (ord($daymicrotime_text[8]) !== ord('.'))
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	$hour     = substr($daymicrotime_text, 0, 2);
	$min      = substr($daymicrotime_text, 3, 2);
	$sec      = substr($daymicrotime_text, 6, 2);
	$microsec = substr($daymicrotime_text, 9, 6);

	if (libcore__is_uint($hour) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (libcore__is_uint($min) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (libcore__is_uint($sec) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}

	if (libcore__is_uint($microsec) === false)
	{
		$result->set_err(7, 'invalid daymicrotime_text');
		return $result;
	}


	$value = new stdClass();
	$value->hour     = $hour;
	$value->min      = $min;
	$value->sec      = $sec;
	$value->microsec = $microsec;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to daymicrotime_text, from "1508150177310040" to "10:36:17.310040"
 * \param[in] unixmicrotime time in microseconds like 1508150177310040 it is 2017-10-16 13:36:17.31004
 * \return result daymicrotime_text like "10:36:17.310040"
 */
function libcore__unixmicrotime_to_daymicrotime_text($unixmicrotime)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	settype($unixmicrotime, "string");

//1234567890123456
//1508150177310040
//1528799349

	for (;;)
	{
		if (strlen($unixmicrotime) >= 16) break;

		$unixmicrotime = "0".$unixmicrotime;
	}

	if (strlen($unixmicrotime) != 16)
	{
		$unixmicrotime = '0000000000000000';
	}

	if (libcore__is_uint($unixmicrotime) === false)
	{
		$unixmicrotime = '0000000000000000';
	}


	$unixtime  = substr($unixmicrotime, 0, 10);
	$microtime = substr($unixmicrotime, 10, 6);
//echo "unixtime: ".$unixtime."\n";
//echo "microtime: ".$microtime."\n";


	if (empty($microtime) === true)
	{
		$microtime = "000000";
	}

	for (;;)
	{
		if (strlen($microtime) >= 6) break;

		$microtime = $microtime."0";
	}


	$value = gmdate("H:i:s", $unixtime);
	$value = $value.".".$microtime;


	$result->set_ok();
	$result->set_value($value);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to day of week, from "1508150177310040" ("2017-10-16T10:36:17.31004+0000") to 1 (Monday, see flag_iso8601)
 * \param[in] unixmicrotime time in microseconds like 1508150177310040 it is 2017-10-16 13:36:17.31004
 * \param[in] flag_iso8601 flag of mode. when it's FALSE then using set (0 - sunday ... 6 - saturday), when it's TRUE then using set (1 - monday ... 7 - sunday)
 * \return result day of week or FALSE if args are bad
 */
function libcore__unixmicrotime_to_dayofweek($unixmicrotime, $flag_iso8601)
{
	settype($flag_iso8601, "boolean");


	$rc = libcore__unixmicrotime_to_unixtime($unixmicrotime);
	if ($rc === false)
	{
		return false;
	}
	$unixtime = $rc;


	$day_of_week = "0";
	if ($flag_iso8601 === false)
	{
		$day_of_week = date("w", $unixtime); // w Порядковый номер дня недели от 0 (воскресенье) до 6 (суббота)
	}
	else
	{
		$day_of_week = date("N", $unixtime); // N Порядковый номер дня недели в соответствии со стандартом ISO-8601 (добавлено в PHP 5.1.0) от 1 (понедельник) до 7 (воскресенье)
	}
	settype($day_of_week, "integer");


	return $day_of_week;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to iso8601, from "1508150177310040" to "2017-10-16T10:36:17.31004+0000"
 * \param[in] unixmicrotime time in microseconds like 1508150177310040 it is 2017-10-16 13:36:17.31004
 * \param[in] gmt_offset time shift in minutes from GMT
 * \return result time in iso8601
 */
function libcore__unixmicrotime_to_iso8601($unixmicrotime, $gmt_offset = 0) // TODO: $filter = "2017-10-16T10:36:17.31004+0000"
{
	settype($unixmicrotime, "string");
	settype($gmt_offset, "integer");

//1234567890123456
//1508150177310040
//1528799349

	for (;;)
	{
		if (strlen($unixmicrotime) >= 16) break;

		$unixmicrotime = "0".$unixmicrotime;
	}

	if (strlen($unixmicrotime) != 16)
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if (libcore__is_uint($unixmicrotime) === false)
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if ($gmt_offset < -1439) // 23:59 = (23 * 60) + 59 = 1439
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if ($gmt_offset > 1439) // 23:59 = (23 * 60) + 59 = 1439
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}

	if (libcore__is_sint($gmt_offset) === false)
	{
		$unixmicrotime = '0000000000000000';
		$gmt_offset = 0;
	}


	$unixtime  = substr($unixmicrotime, 0, 10);
	$microtime = substr($unixmicrotime, 10, 6);
//echo "unixtime: ".$unixtime."\n";
//echo "microtime: ".$microtime."\n";


	$microtime = rtrim($microtime, "0");
	if (empty($microtime) === true)
	{
		$microtime = "0";
	}


	$tmp = gmdate("Y-m-d\TH:i:s", $unixtime);
	$tmp = $tmp.".".$microtime;


	$gmt_offset_hour = abs($gmt_offset) / 60;
	$gmt_offset_min  = abs($gmt_offset) - ($gmt_offset_hour * 60);


	if (strlen($gmt_offset_hour) === 1)
	{
		$gmt_offset_hour = "0".$gmt_offset_hour;
	}

	if (strlen($gmt_offset_min) === 1)
	{
		$gmt_offset_min = "0".$gmt_offset_min;
	}

	if ($gmt_offset < 0)
	{
		$tmp = $tmp."-";
	}
	else
	{
		$tmp = $tmp."+";
	}

	$tmp = $tmp.$gmt_offset_hour.$gmt_offset_min;

	return $tmp;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// convert iso8601 to GMT unixmicrotime, from "2017-10-16T10:36:17.31004+0000" to "1508150177310040"
// \param[in] iso8601 time like 2017-10-16T10:36:17.31004+0000
// \return result GMT unixmicrotime of false if error
function libcore__iso8601_to_unixmicrotime($iso8601)
{
	$filter_list = [
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDD'                         ], // 20050809							9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss'                  ], // 20050809T183142					9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u'                ], // 20050809T183142.1				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu'               ], // 20050809T183142.21				9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu'              ], // 20050809T183142.321				9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu'             ], // 20050809T183142.4321				9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu'            ], // 20050809T183142.54321			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu'           ], // 20050809T183142.654321			9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HH'               ], // 20050809T183142+03				9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HH'             ], // 20050809T183142.1+03				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HH'            ], // 20050809T183142.21+03			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HH'           ], // 20050809T183142.321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HH'          ], // 20050809T183142.4321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HH'         ], // 20050809T183142.54321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HH'        ], // 20050809T183142.654321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HHQQ'             ], // 20050809T183142+0330				9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HHQQ'           ], // 20050809T183142.1+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HHQQ'          ], // 20050809T183142.21+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HHQQ'         ], // 20050809T183142.321+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HHQQ'        ], // 20050809T183142.4321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HHQQ'       ], // 20050809T183142.54321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HHQQ'      ], // 20050809T183142.654321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HH:QQ'            ], // 20050809T183142+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HH:QQ'          ], // 20050809T183142.1+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HH:QQ'         ], // 20050809T183142.21+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HH:QQ'        ], // 20050809T183142.321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HH:QQ'       ], // 20050809T183142.4321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HH:QQ'      ], // 20050809T183142.54321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HH:QQ'     ], // 20050809T183142.654321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HH'               ], // 20050809T183142-03				9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HH'             ], // 20050809T183142.1-03				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HH'            ], // 20050809T183142.21-03			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HH'           ], // 20050809T183142.321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HH'          ], // 20050809T183142.4321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HH'         ], // 20050809T183142.54321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HH'        ], // 20050809T183142.654321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HHQQ'             ], // 20050809T183142-0330				9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HHQQ'           ], // 20050809T183142.1-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HHQQ'          ], // 20050809T183142.21-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HHQQ'         ], // 20050809T183142.321-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HHQQ'        ], // 20050809T183142.4321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HHQQ'       ], // 20050809T183142.54321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HHQQ'      ], // 20050809T183142.654321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HH:QQ'            ], // 20050809T183142-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HH:QQ'          ], // 20050809T183142.1-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HH:QQ'         ], // 20050809T183142.21-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HH:QQ'        ], // 20050809T183142.321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HH:QQ'       ], // 20050809T183142.4321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HH:QQ'      ], // 20050809T183142.54321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HH:QQ'     ], // 20050809T183142.654321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD'                       ], // 2005-08-09						9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss'              ], // 2005-08-09T18:31:42				9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u'            ], // 2005-08-09T18:31:42.1			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu'           ], // 2005-08-09T18:31:42.21			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu'          ], // 2005-08-09T18:31:42.321			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu'         ], // 2005-08-09T18:31:42.4321			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu'        ], // 2005-08-09T18:31:42.54321		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu'       ], // 2005-08-09T18:31:42.654321		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HH'           ], // 2005-08-09T18:31:42+03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HH'         ], // 2005-08-09T18:31:42.1+03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HH'        ], // 2005-08-09T18:31:42.21+03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HH'       ], // 2005-08-09T18:31:42.321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HH'      ], // 2005-08-09T18:31:42.4321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HH'     ], // 2005-08-09T18:31:42.54321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HH'    ], // 2005-08-09T18:31:42.654321+03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HHQQ'         ], // 2005-08-09T18:31:42+0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HHQQ'       ], // 2005-08-09T18:31:42.1+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HHQQ'      ], // 2005-08-09T18:31:42.21+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HHQQ'     ], // 2005-08-09T18:31:42.321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HHQQ'    ], // 2005-08-09T18:31:42.4321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HHQQ'   ], // 2005-08-09T18:31:42.54321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HHQQ'  ], // 2005-08-09T18:31:42.654321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HH:QQ'        ], // 2005-08-09T18:31:42+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HH:QQ'      ], // 2005-08-09T18:31:42.1+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HH:QQ'     ], // 2005-08-09T18:31:42.21+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HH:QQ'    ], // 2005-08-09T18:31:42.321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HH:QQ'   ], // 2005-08-09T18:31:42.4321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HH:QQ'  ], // 2005-08-09T18:31:42.54321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HH:QQ' ], // 2005-08-09T18:31:42.654321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HH'           ], // 2005-08-09T18:31:42-03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HH'         ], // 2005-08-09T18:31:42.1-03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HH'        ], // 2005-08-09T18:31:42.21-03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HH'       ], // 2005-08-09T18:31:42.321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HH'      ], // 2005-08-09T18:31:42.4321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HH'     ], // 2005-08-09T18:31:42.54321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HH'    ], // 2005-08-09T18:31:42.654321-03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HHQQ'         ], // 2005-08-09T18:31:42-0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HHQQ'       ], // 2005-08-09T18:31:42.1-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HHQQ'      ], // 2005-08-09T18:31:42.21-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HHQQ'     ], // 2005-08-09T18:31:42.321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HHQQ'    ], // 2005-08-09T18:31:42.4321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HHQQ'   ], // 2005-08-09T18:31:42.54321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HHQQ'  ], // 2005-08-09T18:31:42.654321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HH:QQ'        ], // 2005-08-09T18:31:42-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HH:QQ'      ], // 2005-08-09T18:31:42.1-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HH:QQ'     ], // 2005-08-09T18:31:42.21-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HH:QQ'    ], // 2005-08-09T18:31:42.321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HH:QQ'   ], // 2005-08-09T18:31:42.4321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HH:QQ'  ], // 2005-08-09T18:31:42.54321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HH:QQ' ], // 2005-08-09T18:31:42.654321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss'              ], // 2005-08-09 18:31:42				9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u'            ], // 2005-08-09 18:31:42.1			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu'           ], // 2005-08-09 18:31:42.21			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu'          ], // 2005-08-09 18:31:42.321			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu'         ], // 2005-08-09 18:31:42.4321			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu'        ], // 2005-08-09 18:31:42.54321		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu'       ], // 2005-08-09 18:31:42.654321		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss+HH'           ], // 2005-08-09 18:31:42+03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u+HH'         ], // 2005-08-09 18:31:42.1+03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu+HH'        ], // 2005-08-09 18:31:42.21+03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu+HH'       ], // 2005-08-09 18:31:42.321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu+HH'      ], // 2005-08-09 18:31:42.4321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu+HH'     ], // 2005-08-09 18:31:42.54321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu+HH'    ], // 2005-08-09 18:31:42.654321+03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss+HHQQ'         ], // 2005-08-09 18:31:42+0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u+HHQQ'       ], // 2005-08-09 18:31:42.1+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu+HHQQ'      ], // 2005-08-09 18:31:42.21+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu+HHQQ'     ], // 2005-08-09 18:31:42.321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu+HHQQ'    ], // 2005-08-09 18:31:42.4321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu+HHQQ'   ], // 2005-08-09 18:31:42.54321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu+HHQQ'  ], // 2005-08-09 18:31:42.654321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss+HH:QQ'        ], // 2005-08-09 18:31:42+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u+HH:QQ'      ], // 2005-08-09 18:31:42.1+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu+HH:QQ'     ], // 2005-08-09 18:31:42.21+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu+HH:QQ'    ], // 2005-08-09 18:31:42.321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu+HH:QQ'   ], // 2005-08-09 18:31:42.4321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu+HH:QQ'  ], // 2005-08-09 18:31:42.54321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu+HH:QQ' ], // 2005-08-09 18:31:42.654321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss-HH'           ], // 2005-08-09 18:31:42-03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u-HH'         ], // 2005-08-09 18:31:42.1-03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu-HH'        ], // 2005-08-09 18:31:42.21-03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu-HH'       ], // 2005-08-09 18:31:42.321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu-HH'      ], // 2005-08-09 18:31:42.4321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu-HH'     ], // 2005-08-09 18:31:42.54321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu-HH'    ], // 2005-08-09 18:31:42.654321-03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss-HHQQ'         ], // 2005-08-09 18:31:42-0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u-HHQQ'       ], // 2005-08-09 18:31:42.1-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu-HHQQ'      ], // 2005-08-09 18:31:42.21-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu-HHQQ'     ], // 2005-08-09 18:31:42.321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu-HHQQ'    ], // 2005-08-09 18:31:42.4321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu-HHQQ'   ], // 2005-08-09 18:31:42.54321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu-HHQQ'  ], // 2005-08-09 18:31:42.654321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss-HH:QQ'        ], // 2005-08-09 18:31:42-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.u-HH:QQ'      ], // 2005-08-09 18:31:42.1-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uu-HH:QQ'     ], // 2005-08-09 18:31:42.21-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuu-HH:QQ'    ], // 2005-08-09 18:31:42.321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuu-HH:QQ'   ], // 2005-08-09 18:31:42.4321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuu-HH:QQ'  ], // 2005-08-09 18:31:42.54321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DD hh:mm:ss.uuuuuu-HH:QQ' ], // 2005-08-09 18:31:42.654321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут
	];
	$filter_list_size = count($filter_list);


	for ($i=0; $i < $filter_list_size; $i++)
	{
		$filter_list[$i]['flag_enable'] = true;
		$filter_list[$i]['out'] = [];
		$filter_list[$i]['out']['year'] = '';
		$filter_list[$i]['out']['month'] = '';
		$filter_list[$i]['out']['day'] = '';
		$filter_list[$i]['out']['hour'] = '';
		$filter_list[$i]['out']['min'] = '';
		$filter_list[$i]['out']['sec'] = '';
		$filter_list[$i]['out']['microsec'] = '';
		$filter_list[$i]['out']['gmt_offset_hour'] = '';
		$filter_list[$i]['out']['gmt_offset_min'] = '';
	}


	$iso8601_size = strlen($iso8601);

	$flag_found = false;
	for ($i=0; $i < $filter_list_size; $i++)
	{
		$filter_size = strlen($filter_list[$i]['filter']);

		if ($filter_size !== $iso8601_size)
		{
			$filter_list[$i]['flag_enable'] = false;
		}
		else
		{
			$flag_found = true;
		}
	}
	if ($flag_found === false)
	{
		return false;
	}


	for ($i=0; $i < $iso8601_size; $i++)
	{
		for ($j=0; $j < $filter_list_size; $j++)
		{
			if ($filter_list[$j]['flag_enable'] === false) continue;

			$ch = $filter_list[$j]['filter'][$i];
			settype($ch, "string");

			for (;;)
			{
				if
				(
					(strcmp($ch, "Y") === 0) ||
					(strcmp($ch, "M") === 0) ||
					(strcmp($ch, "D") === 0) ||
					(strcmp($ch, "h") === 0) ||
					(strcmp($ch, "m") === 0) ||
					(strcmp($ch, "s") === 0) ||
					(strcmp($ch, "u") === 0) ||
					(strcmp($ch, "H") === 0) ||
					(strcmp($ch, "Q") === 0)
				)
				{
					if (libcore__is_uint($iso8601[$i]) === false)
					{
						$filter_list[$j]['flag_enable'] = false;
						break;
					}
				}
				if (strcmp($ch, "Y") === 0)
				{
					$filter_list[$j]['out']['year'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "M") === 0)
				{
					$filter_list[$j]['out']['month'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "D") === 0)
				{
					$filter_list[$j]['out']['day'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "h") === 0)
				{
					$filter_list[$j]['out']['hour'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "m") === 0)
				{
					$filter_list[$j]['out']['min'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "s") === 0)
				{
					$filter_list[$j]['out']['sec'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "u") === 0)
				{
					$filter_list[$j]['out']['microsec'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "H") === 0)
				{
					$filter_list[$j]['out']['gmt_offset_hour'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "Q") === 0)
				{
					$filter_list[$j]['out']['gmt_offset_min'] .= $iso8601[$i];
					break;
				}
				if (strcmp($filter_list[$j]['filter'][$i], $iso8601[$i]) !== 0)
				{
					$filter_list[$j]['flag_enable'] = false;
					break;
				}
				break;
			}
		}
	}


	$count = 0;
	$index = -1;
	for ($i=0; $i < $filter_list_size; $i++)
	{
		if ($filter_list[$i]['flag_enable'] === false) continue;

		$index = $i;
		$count++;
	}
	if ($count !== 1)
	{
		return false;
	}


	$year            = $filter_list[$index]['out']['year'];
	$month           = $filter_list[$index]['out']['month'];
	$day             = $filter_list[$index]['out']['day'];
	$hour            = $filter_list[$index]['out']['hour'];
	$min             = $filter_list[$index]['out']['min'];
	$sec             = $filter_list[$index]['out']['sec'];
	$microsec        = $filter_list[$index]['out']['microsec'];
	$gmt_offset_sign = $filter_list[$index]['gmt_offset_sign'];
	$gmt_offset_hour = $filter_list[$index]['out']['gmt_offset_hour'];
	$gmt_offset_min  = $filter_list[$index]['out']['gmt_offset_min'];


	if (strcmp($year,            '') === 0) $year            = '0';
	if (strcmp($month,           '') === 0) $month           = '0';
	if (strcmp($day,             '') === 0) $day             = '0';
	if (strcmp($hour,            '') === 0) $hour            = '0';
	if (strcmp($min,             '') === 0) $min             = '0';
	if (strcmp($sec,             '') === 0) $sec             = '0';
	if (strcmp($microsec,        '') === 0) $microsec        = '0';
	if (strcmp($gmt_offset_hour, '') === 0) $gmt_offset_hour = '0';
	if (strcmp($gmt_offset_min,  '') === 0) $gmt_offset_min  = '0';


//	echo "iso8601:".$iso8601."\n";
//	echo "year:".$year."\n";
//	echo "month:".$month."\n";
//	echo "day:".$day."\n";
//	echo "hour:".$hour."\n";
//	echo "min:".$min."\n";
//	echo "sec:".$sec."\n";
//	echo "microsec:".$microsec."\n";
//	echo "gmt_offset_hour:".$gmt_offset_hour."\n";
//	echo "gmt_offset_min:".$gmt_offset_min."\n";


	$unixtime = gmmktime ($hour, $min, $sec, $month, $day, $year);


	$gmt_offset = ($gmt_offset_hour * 60 * 60) + ($gmt_offset_min * 60);


	if (strcmp($gmt_offset_sign, '+') === 0)
	{
		$unixtime = $unixtime - $gmt_offset;
	}
	else
	{
		$unixtime = $unixtime + $gmt_offset;
	}

	$unixmicrotime = ($unixtime * 1000000) + $microsec;


	for (;;)
	{
		if (strlen($unixmicrotime) === 16) break;

		$unixmicrotime = "0".$unixmicrotime;
	}


	return $unixmicrotime;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixmicrotime to unixtime, from "1528799349000000" to "1528799349"
 * \param[in] unixmicrotime time in microseconds like 1528799349000000 it is 2018-06-12 13:29:09.0
 * \return result day of week or FALSE if args are bad
 */
function libcore__unixmicrotime_to_unixtime($unixmicrotime)
{
	settype($unixmicrotime, "string");


	if (strlen($unixmicrotime) !== 16)
	{
		return false;
	}

	if (libcore__is_uint($unixmicrotime) === false)
	{
		return false;
	}


	return substr($unixmicrotime, 0, 10);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert unixtime to unixmicrotime, from "1528799349" to "1528799349000000"
 * \param[in] unixtime time in seconds like 1528799349 it is 2018-06-12 13:29:09
 * \return result day of week or FALSE if args are bad
 */
function libcore__unixtime_to_unixmicrotime($unixtime)
{
	settype($unixtime, "string");


	if (strlen($unixtime) !== 10)
	{
		return false;
	}

	if (libcore__is_uint($unixtime) === false)
	{
		return false;
	}


	return $unixtime."000000";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from datatime to string
 * \param[in] gmt_offset time shit from GMT
 * \param[in] datatime datatime
 * \return humanable string of time
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * draw time for log lines
 * \param[in] desc description
 * \return drow time
 */
function libcore__draw_time($desc = '')
{
	$tmp = "[".date("Y-m-d H:i:s", time())."]";

	if ($desc === '')
	{
		return $tmp.": ";
	}

	return $tmp." [".$desc."]: ";
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * get name of month
 * \param[in] month_num number of month
 * \param[in] flag_simple flag_simple
 * \return name of month
 */
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
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert from '1394767999' to '2014-03-14 03:33:19'
 * \param[in] unixtime unixtime
 * \return datatime
 */
function libcore__unixtime2datatime($unixtime)
{
	return date('Y-m-d H:i:s', $unixtime);
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
?>