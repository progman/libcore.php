<?php
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
require_once("libcore.php");
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
		$c2 = libcore__hex_string_expand((dechex(hexdec($a) + hexdec($b))), 32);


		if (strcmp($c1, $c2) != 0)
		{
			echo "ERROR[".__FUNCTION__."()]: step005\n";
			echo "c1     : ".$c1."\n";
			echo "c2     : ".$c2."\n";
			exit(1);
		}
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__cmp()
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
function test__libcore__array_uniq_concat()
{
	$in_list = array();
	array_push($in_list, "000000000000000000000000000000000000000000000000000000000000fe73");
	array_push($in_list, "000000000000000000000000000000000000000000000000000000000000fe4a");
	array_push($in_list, "000000000000000000000000000000000000000000000000000000000000fe4a");
	array_push($in_list, "000000000000000000000000000000000000000000000000000000000000fe73");


	$out_list = libcore__array_uniq_concat(array(), $in_list);


	if (count($out_list) !== 2)
	{
		echo "ERROR[".__FUNCTION__."()]: step001\n";
		exit(1);
	}


	if (strcmp($out_list[0], "000000000000000000000000000000000000000000000000000000000000fe73") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step002\n";
		exit(1);
	}


	if (strcmp($out_list[1], "000000000000000000000000000000000000000000000000000000000000fe4a") !== 0)
	{
		echo "ERROR[".__FUNCTION__."()]: step003\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__flag()
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
test__libcore__tojson();
test__libcore__is_uint();
test__libcore__is_sint();
test__libcore__is_hex();
test__libcore__is_float();
test__libcore__hex2bin();
test__libcore__is_parity();
test__libcore__rnd();
test__libcore__hex_string_parity();
test__libcore__hex_string_expand();
test__libcore__hex_string_add();
test__libcore__cmp();
test__libcore__array_uniq_concat();
test__libcore__flag();

echo "ok, test passed\n";
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
?>