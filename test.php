<?php
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
require_once("libcore.php");
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
	function libcore__cmp_value($v1, $v2)
	function libcore__cmp_object($obj1, $obj2)
	function libcore__cmp_array(array $arr1, array $arr2)
	function libcore__array_add($arr1, $arr2)
	function libcore__array_uniq($arr)
	function libcore__array_sub($arr1, $arr2)
function libcore__out($list = array(), $callback = '')
function libcore__get_data_url($filename)
*/
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__tojson()
{
// \u0022 - " - Unicode Character 'QUOTATION MARK' (U+0022)
// \u005c - \ - Unicode Character 'REVERSE SOLIDUS' (U+005C)
// \u002f - / - Unicode Character 'SOLIDUS' (U+002F) /
// \u0008 - b - backspace - Unicode Character 'BACKSPACE' (U+0008)
// \u000c - f - formfeed - Unicode Character 'FORM FEED (FF)' (U+000C)
// \u000a - \n newline - 'LINE FEED (LF)' (U+000A)
// \u000d - \r carriage return - 'CARRIAGE RETURN (CR)' (U+000D)
// \u0009 - \t horizontal tab - Unicode Character 'CHARACTER TABULATION' (U+0009)

/*
[\"][\\][\/][\b][\f][\n][\r][\t]
\"\\\/\b\f\n\r\t
*/
	$rc = libcore__tojson(" ");
	if (strcmp($rc, ' ') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$rc = libcore__tojson("\x22");
	if (strcmp($rc, '\"') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__tojson("\x5c");
	if (strcmp($rc, "\\\\") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	$rc = libcore__tojson("\x2f");
	if (strcmp($rc, '\/') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__tojson("\x08");
	if (strcmp($rc, '\b') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0c");
	if (strcmp($rc, '\f') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0a");
	if (strcmp($rc, '\n') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0d");
	if (strcmp($rc, '\r') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}

	$rc = libcore__tojson("\x09");
	if (strcmp($rc, '\t') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step009\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//!function libcore__drop_sql_injection(&$obj)
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//!function libcore__rnd_bin_string($size)
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__rnd()
{
	$max = 100;
	for ($i=0; $i < ($max + 1); $i++)
	{
		$count = 0;
		for (;;)
		{
			$x = libcore__rnd(0, $max);
			if ($x == $i) break;

			if ($x == ($max + 1))
			{
				echo "ERROR[".__FUNCTION__."()]: step001\n";
				exit(1);
			}

			$count++;

			if ($count == 1000000000)
			{
				echo "ERROR[".__FUNCTION__."()]: step002\n";
				exit(1);
			}
		}
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//!function libcore__get_rnd()
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_parity()
{
	if (libcore__is_parity(1) == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_parity(2) == false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
function test__libcore__is_uuid()
{
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE38') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE36') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE34') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE32') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12]') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a1z}') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}


	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE38') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE36') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE34') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE32') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d+6bb9bd380a12') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a1z') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step014\n";
		exit(1);
	}


	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step015\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE38') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step016\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE36') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step017\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE34') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step018\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE32') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step019\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12]') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step020\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a1z}') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step021\n";
		exit(1);
	}


	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step022\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE38') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step023\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE36') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step024\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE34') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step025\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE32') === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step026\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a1}') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step027\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a1z') === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step028\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
function test__libcore__uuid2type32()
{
	$rc = libcore__uuid2type32('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a13') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type32('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a12') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type32('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a17') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type32('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a16') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
function test__libcore__uuid2type34()
{
	$rc = libcore__uuid2type34('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a13}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type34('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a12}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type34('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a17}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type34('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a16}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
function test__libcore__uuid2type36()
{
	$rc = libcore__uuid2type36('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a17') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a16') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
function test__libcore__uuid2type38()
{
	$rc = libcore__uuid2type38('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type38('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type38('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a17}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type38('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a16}') !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
function test__libcore__is_uint()
{
	if (libcore__is_uint("") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_uint("+1") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_uint("-1") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_sint()
{
	if (libcore__is_sint("") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_sint("+1+") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}


	if (libcore__is_sint("-1-") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_hex()
{
	if (libcore__is_hex("") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_hex("z") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_hex("0") == false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

for ($i=0; $i < 1000000; $i++)
{
	if (libcore__is_hex("0123456789abcdefABCDEF") == false)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}
}

	if (libcore__is_hex("0123456789abcdefABCDEF0", true) == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_float()
{
	if (libcore__is_float("") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_float("1") == false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.00") == false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.0.0") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_float(".1") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_float(".1.") == true)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__flag() // libcore__is_flag_unset(), libcore__is_flag_set(), libcore__is_flag(), libcore__var2flag(), libcore__flag2bool(), libcore__flag2int(), libcore__flag2str()
{
	if (libcore__is_flag_unset(false) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_flag_unset(0) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_flag_unset("false") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_flag_unset("off") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_flag_unset("0") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}



	if (libcore__is_flag_set(false) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (libcore__is_flag_set(0) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step007\n";
		exit(1);
	}

	if (libcore__is_flag_set("false") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step008\n";
		exit(1);
	}

	if (libcore__is_flag_set("off") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (libcore__is_flag_set("0") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step010\n";
		exit(1);
	}



	if (libcore__is_flag_set(true) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step011\n";
		exit(1);
	}

	if (libcore__is_flag_set(100) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step012\n";
		exit(1);
	}

	if (libcore__is_flag_set("true") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step013\n";
		exit(1);
	}

	if (libcore__is_flag_set("on") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step014\n";
		exit(1);
	}

	if (libcore__is_flag_set("1") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step015\n";
		exit(1);
	}



	if (libcore__is_flag_unset(true) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step016\n";
		exit(1);
	}

	if (libcore__is_flag_unset(100) !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step017\n";
		exit(1);
	}

	if (libcore__is_flag_unset("true") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step018\n";
		exit(1);
	}

	if (libcore__is_flag_unset("on") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step019\n";
		exit(1);
	}

	if (libcore__is_flag_unset("1") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step020\n";
		exit(1);
	}



	if (libcore__is_flag("moon") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step021\n";
		exit(1);
	}



	if (strcmp(libcore__var2flag(false),   "0") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step022\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(0),       "0") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step023\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("false"), "0") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step024\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("off"),   "0") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step025\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("0"),     "0") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step026\n";
		exit(1);
	}



	if (strcmp(libcore__var2flag(true),    "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step027\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(100),     "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step028\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("true"),  "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step029\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("on"),    "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step030\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("1"),     "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step031\n";
		exit(1);
	}



	if (libcore__flag2bool("0") !== false)
	{
		echo "ERROR[".__FUNCTION__."()]: step032\n";
		exit(1);
	}

	if (libcore__flag2bool("1") === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step033\n";
		exit(1);
	}



	if (libcore__flag2int("0") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step034\n";
		exit(1);
	}

	if (libcore__flag2int("1") === 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step035\n";
		exit(1);
	}



	if (strcmp(libcore__flag2str("0"), "false") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step036\n";
		exit(1);
	}

	if (strcmp(libcore__flag2str("1"), "true") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step037\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//!function libcore__filter_enum($value, $value_list)
//!function libcore__get_var($key_name, $value_default = null)
//!function libcore__get_var_json($key_name = null, $value_default = null)
//!function libcore__get_var_str($key_name, $value_default = null)
//!function libcore__shell_get_str($key_name, $value_default = "", $flag_drop_sql_injection = true)
//!function libcore__get_var_hex($key_name, $value_default = null)
//!function libcore__shell_get_hex($key_name, $value_default = '00')
//!function libcore__get_var_float($key_name, $value_default = null)
//!function libcore__shell_get_float($key_name, $value_default = 0)
//!function libcore__get_var_uint($key_name, $value_default = null)
//!function libcore__shell_get_uint($key_name, $value_default = 0)
//!function libcore__get_var_sint($key_name, $value_default = null)
//!function libcore__shell_get_sint($key_name, $value_default = 0)
//!function libcore__get_var_flag($key_name, $value_default = null)
//!function libcore__shell_get_flag($key_name, $value_default = "0")
//!function libcore__get_var_enum($key_name, $value_list)
//!function libcore__shell_get_enum($key_name, $value_list, $flag_drop_sql_injection = true)
//!function libcore__gzip_check()
//!function libcore__gzip_open($flag_gzip)
//!function libcore__gzip_close($flag_gzip)
//!function libcore__getmonthname($month_num, $flag_simple = false)
//!function libcore__convert_date($gmt_offset, $datatime)
//!function libcore__set_cookie($cookie_name, $cookie_value, $expired)
//!function libcore__unixtime2datatime($unixtime)
//!function libcore__make_dir($path)
//!function libcore__get_cache_file($filename)
//!function libcore__get_time_file($filename, $gmt_offset)
//!function libcore__blk_read($handle, $str_size)
//!function libcore__blk_write($handle, $str)
//!function libcore__file_get($filename)
//!function libcore__file_set($filename, $str)
//!function libcore__file_add($filename, $str)
//!function libcore__file_copy($source, $target, $flag_overwrite = false)
//!function libcore__do_post($url, $data, $flag_security = true, $timeout = 30)
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__hex2bin()
{
	$x = 'super puper';

	$x_hex = bin2hex($x);

	$y = libcore__hex2bin($x_hex, true);

	if ($x !== $y)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__hex_string_parity()
{
	$x = libcore__hex_string_parity("0");
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$x = libcore__hex_string_parity("00");
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__hex_string_expand()
{
	$x = libcore__hex_string_expand("0", 2);
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$x = libcore__hex_string_expand("00", 2);
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__hex_string_add()
{
	$x = "1";
	$y = "2";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "03") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$x = "fe";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "ff") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$x = "ff";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "0100") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	$x = "ff";
	$y = "ff";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "01fe") != 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}


	for ($i=0; $i < 1000; $i++)
	{
		$a = libcore__hex_string_expand(dechex(rand(0, 9223372036854775807)), 32);
		$b = libcore__hex_string_expand(dechex(rand(0, 9223372036854775807)), 32);


		$c1 = libcore__hex_string_add($a, $b);
//		$c2 = libcore__hex_string_expand((dechex(hexdec($a) + hexdec($b))), 32);

		$x = gmp_init($a, 16);
		$y = gmp_init($b, 16);
		$z = gmp_add($x, $y);
		$c2 = libcore__hex_string_expand(gmp_strval($z, 16), 32);

		if (strcmp($c1, $c2) != 0)
		{
			echo "ERROR[".__FUNCTION__."()]: step005\n";
			echo "a      : ".$a."\n";
			echo "b      : ".$b."\n";
			echo "c1     : ".$c1."\n";
			echo "c2     : ".$c2."\n";
			exit(1);
		}
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__cmp() // libcore__cmp_value(), libcore__cmp_object(), libcore__cmp_array()
{
	$o1 = new stdClass();
	$o1->x = new stdClass();

	$o2 = new stdClass();

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 1, 'red'  => 2, 'green'  => 5, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'red'    => 2, 'purple' => 4);

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array();
	array_push($o1->x, '10');
	array_push($o1->x, '20');

	$o2 = new stdClass();
	$o2->x = array();
	array_push($o2->x, '20');
	array_push($o2->x, '10');

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 6, 'red'  => 2, 'green'  => 5, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'red'    => 2, 'purple' => 4);

	if (libcore__cmp_value($o1, $o2) === false)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__array_add()
{
	$in1_list = array();
	array_push($in1_list, "1");
	array_push($in1_list, "2");


	$in2_list = array();
	array_push($in2_list, "2");
	array_push($in2_list, "3");


	$out_list = libcore__array_add($in1_list, $in2_list);


	if (count($out_list) !== 4)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}


	if (strcmp($out_list[0], "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (strcmp($out_list[1], "2") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (strcmp($out_list[2], "2") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (strcmp($out_list[3], "3") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__array_uniq()
{
	$in_list = array();
	array_push($in_list, "1");
	array_push($in_list, "2");
	array_push($in_list, "2");
	array_push($in_list, "3");


	$out_list = libcore__array_uniq($in_list);


	if (count($out_list) !== 3)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (strcmp($out_list[0], "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (strcmp($out_list[1], "2") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (strcmp($out_list[2], "3") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$in_list = array("a" => "green", "b" => "green", "c" => "green");


	$out_list = libcore__array_uniq($in_list);


	if (count($out_list) !== 1)
	{
		echo "ERROR[".__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (strcmp($out_list['a'], "green") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step006\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__array_sub()
{
	$in1_list = array();
	array_push($in1_list, "1");
	array_push($in1_list, "2");
	array_push($in1_list, "3");
	array_push($in1_list, "4");


	$in2_list = array();
	array_push($in2_list, "3");
	array_push($in2_list, "2");


	$out_list = libcore__array_sub($in1_list, $in2_list);


	if (count($out_list) !== 2)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}


	if (strcmp($out_list[0], "1") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}


	if (strcmp($out_list[1], "4") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//function libcore__out($list = array(), $callback = '')
//function libcore__get_data_url($filename)
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
test__libcore__tojson();


//function libcore__drop_sql_injection(&$obj)
//function libcore__rnd_bin_string($size)


test__libcore__rnd();


//function libcore__get_rnd()


test__libcore__is_parity();
test__libcore__is_uuid();

test__libcore__uuid2type32();
test__libcore__uuid2type34();
test__libcore__uuid2type36();
test__libcore__uuid2type38();

test__libcore__is_uint();
test__libcore__is_sint();
test__libcore__is_hex();
test__libcore__is_float();
test__libcore__flag(); // libcore__is_flag_unset(), libcore__is_flag_set(), libcore__is_flag(), libcore__var2flag(), libcore__flag2bool(), libcore__flag2int(), libcore__flag2str()


//function libcore__filter_enum($value, $value_list)
//function libcore__get_var($key_name, $value_default = null)
//function libcore__get_var_json($key_name = null, $value_default = null)
//function libcore__get_var_str($key_name, $value_default = null)
//function libcore__shell_get_str($key_name, $value_default = "", $flag_drop_sql_injection = true)
//function libcore__get_var_hex($key_name, $value_default = null)
//function libcore__shell_get_hex($key_name, $value_default = '00')
//function libcore__get_var_float($key_name, $value_default = null)
//function libcore__shell_get_float($key_name, $value_default = 0)
//function libcore__get_var_uint($key_name, $value_default = null)
//function libcore__shell_get_uint($key_name, $value_default = 0)
//function libcore__get_var_sint($key_name, $value_default = null)
//function libcore__shell_get_sint($key_name, $value_default = 0)
//function libcore__get_var_flag($key_name, $value_default = null)
//function libcore__shell_get_flag($key_name, $value_default = "0")
//function libcore__get_var_enum($key_name, $value_list)
//function libcore__shell_get_enum($key_name, $value_list, $flag_drop_sql_injection = true)
//function libcore__gzip_check()
//function libcore__gzip_open($flag_gzip)
//function libcore__gzip_close($flag_gzip)
//function libcore__getmonthname($month_num, $flag_simple = false)
//function libcore__convert_date($gmt_offset, $datatime)
//function libcore__set_cookie($cookie_name, $cookie_value, $expired)
//function libcore__unixtime2datatime($unixtime)
//function libcore__make_dir($path)
//function libcore__get_cache_file($filename)
//function libcore__get_time_file($filename, $gmt_offset)
//function libcore__blk_read($handle, $str_size)
//function libcore__blk_write($handle, $str)
//function libcore__file_get($filename)
//function libcore__file_set($filename, $str)
//function libcore__file_add($filename, $str)
//function libcore__file_copy($source, $target, $flag_overwrite = false)
//function libcore__do_post($url, $data, $flag_security = true, $timeout = 30)


test__libcore__hex2bin();
test__libcore__hex_string_parity();
test__libcore__hex_string_expand();
test__libcore__hex_string_add();
test__libcore__cmp(); // libcore__cmp_value(), libcore__cmp_object(), libcore__cmp_array()
test__libcore__array_add();
test__libcore__array_uniq();
test__libcore__array_sub();

//function libcore__out($list = array(), $callback = '')
//function libcore__get_data_url($filename)

echo "ok, test passed\n";
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
?>