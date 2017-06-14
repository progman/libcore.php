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
		echo "ERROR[test__libcore__tojson()]: step001\n";
		exit(1);
	}

	$rc = libcore__tojson("\x22");
	if (strcmp($rc, '\"') !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step002\n";
		exit(1);
	}

	$rc = libcore__tojson("\x5c");
	if (strcmp($rc, "\\\\") !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step003\n";
		exit(1);
	}

	$rc = libcore__tojson("\x2f");
	if (strcmp($rc, '\/') !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step004\n";
		exit(1);
	}

	$rc = libcore__tojson("\x08");
	if (strcmp($rc, '\b') !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step005\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0c");
	if (strcmp($rc, '\f') !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step006\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0a");
	if (strcmp($rc, '\n') !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step007\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0d");
	if (strcmp($rc, '\r') !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step008\n";
		exit(1);
	}

	$rc = libcore__tojson("\x09");
	if (strcmp($rc, '\t') !== 0)
	{
		echo "ERROR[test__libcore__tojson()]: step009\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_uint()
{
	if (libcore__is_uint("") == true)
	{
		echo "ERROR[test_libcore__is_uint()]: step001\n";
		exit(1);
	}

	if (libcore__is_uint("+1") == true)
	{
		echo "ERROR[test_libcore__is_uint()]: step002\n";
		exit(1);
	}

	if (libcore__is_uint("-1") == true)
	{
		echo "ERROR[test_libcore__is_uint()]: step003\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_sint()
{
	if (libcore__is_sint("") == true)
	{
		echo "ERROR[test_libcore__is_sint()]: step001\n";
		exit(1);
	}

	if (libcore__is_sint("+1+") == true)
	{
		echo "ERROR[test_libcore__is_sint()]: step002\n";
		exit(1);
	}


	if (libcore__is_sint("-1-") == true)
	{
		echo "ERROR[test_libcore__is_sint()]: step003\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_hex()
{
	if (libcore__is_hex("") == true)
	{
		echo "ERROR[test_libcore__is_hex()]: step001\n";
		exit(1);
	}

	if (libcore__is_hex("z") == true)
	{
		echo "ERROR[test_libcore__is_hex()]: step002\n";
		exit(1);
	}

	if (libcore__is_hex("0") == false)
	{
		echo "ERROR[test_libcore__is_hex()]: step003\n";
		exit(1);
	}

for ($i=0; $i < 1000000; $i++)
{
	if (libcore__is_hex("0123456789abcdefABCDEF") == false)
	{
		echo "ERROR[test_libcore__is_hex()]: step004\n";
		exit(1);
	}
}

	if (libcore__is_hex("0123456789abcdefABCDEF0", true) == true)
	{
		echo "ERROR[test_libcore__is_hex()]: step005\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_float()
{
	if (libcore__is_float("") == true)
	{
		echo "ERROR[test_libcore__is_float()]: step001\n";
		exit(1);
	}

	if (libcore__is_float("1") == false)
	{
		echo "ERROR[test_libcore__is_float()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.00") == false)
	{
		echo "ERROR[test_libcore__is_float()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.0.0") == true)
	{
		echo "ERROR[test_libcore__is_float()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.") == true)
	{
		echo "ERROR[test_libcore__is_float()]: step003\n";
		exit(1);
	}

	if (libcore__is_float(".1") == true)
	{
		echo "ERROR[test_libcore__is_float()]: step004\n";
		exit(1);
	}

	if (libcore__is_float(".1.") == true)
	{
		echo "ERROR[test_libcore__is_float()]: step005\n";
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
		echo "ERROR[test__libcore__hex2bin()]: step001\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__is_parity()
{
	if (libcore__is_parity(1) == true)
	{
		echo "ERROR[test__libcore__is_parity()]: step001\n";
		exit(1);
	}

	if (libcore__is_parity(2) == false)
	{
		echo "ERROR[test__libcore__is_parity()]: step002\n";
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
				echo "ERROR[test__libcore__rnd()]: step001\n";
				exit(1);
			}

			$count++;

			if ($count == 1000000000)
			{
				echo "ERROR[test__libcore__rnd()]: step002\n";
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
		echo "ERROR[test__libcore__hex_string_parity()]: step001\n";
		exit(1);
	}

	$x = libcore__hex_string_parity("00");
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[test__libcore__hex_string_parity()]: step002\n";
		exit(1);
	}
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
function test__libcore__hex_string_expand()
{
	$x = libcore__hex_string_expand("0", 2);
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[test__libcore__hex_string_expand()]: step001\n";
		exit(1);
	}

	$x = libcore__hex_string_expand("00", 2);
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[test__libcore__hex_string_expand()]: step002\n";
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
		echo "ERROR[test__libcore__hex_string_add()]: step001\n";
		exit(1);
	}


	$x = "fe";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "ff") != 0)
	{
		echo "ERROR[test__libcore__hex_string_add()]: step002\n";
		exit(1);
	}


	$x = "ff";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "0100") != 0)
	{
		echo "ERROR[test__libcore__hex_string_add()]: step003\n";
		exit(1);
	}

	$x = "ff";
	$y = "ff";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "01fe") != 0)
	{
		echo "ERROR[test__libcore__hex_string_add()]: step004\n";
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
			echo "ERROR[test__libcore__hex_string_expand()]: step005\n";
			echo "c1     : ".$c1."\n";
			echo "c2     : ".$c2."\n";
			exit(1);
		}
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

echo "ok, test passed\n";
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
?>