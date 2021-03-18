<?php
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// 1.4.3
// Alexey Potehin <gnuplanet@gmail.com>, http://www.gnuplanet.ru/doc/cv
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// PLEASE DO NOT EDIT !!! THIS FILE IS GENERATED FROM FILES FROM DIR src BY make.sh
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
require_once("libcore.php");
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__array_add()
 */
(function()
{
	$__FUNCTION__='libcore__array_add';
	$start = libcore__get_unixmicrotime();


	$in1_list = array();
	array_push($in1_list, "1");
	array_push($in1_list, "2");


	$in2_list = array();
	array_push($in2_list, "2");
	array_push($in2_list, "3");


	$out_list = libcore__array_add($in1_list, $in2_list);


	if (count($out_list) !== 4)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	if (strcmp($out_list[0], "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (strcmp($out_list[1], "2") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (strcmp($out_list[2], "2") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (strcmp($out_list[3], "3") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__array_sub()
 */
(function()
{
	$__FUNCTION__='libcore__array_sub';
	$start = libcore__get_unixmicrotime();


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
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	if (strcmp($out_list[0], "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	if (strcmp($out_list[1], "4") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__array_uniq()
 */
(function()
{
	$__FUNCTION__='libcore__array_uniq';
	$start = libcore__get_unixmicrotime();


	$in_list = array();
	array_push($in_list, "1");
	array_push($in_list, "2");
	array_push($in_list, "2");
	array_push($in_list, "3");


	$out_list = libcore__array_uniq($in_list);


	if (count($out_list) !== 3)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (strcmp($out_list[0], "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (strcmp($out_list[1], "2") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (strcmp($out_list[2], "3") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$in_list = array("a" => "green", "b" => "green", "c" => "green");


	$out_list = libcore__array_uniq($in_list);


	if (count($out_list) !== 1)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (strcmp($out_list['a'], "green") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__base64url_decode()
 */
(function()
{
	$__FUNCTION__='libcore__base64url_decode';
	$start = libcore__get_unixmicrotime();


	$x1 = "any carnal pleasure..";
	$x2 = "any carnal pleasure.";
	$x3 = "any carnal pleasure";
	$x4 = "any carnal pleasur";
	$x5 = "any carnal pleasu";
	$x6 = "any carnal pleas";
	$x7 = chr(hexdec("f8"));
	$x8 = chr(hexdec("fc"));


	if (strcmp(base64_encode($x1), "YW55IGNhcm5hbCBwbGVhc3VyZS4u") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp(base64_encode($x2), "YW55IGNhcm5hbCBwbGVhc3VyZS4=") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (strcmp(base64_encode($x3), "YW55IGNhcm5hbCBwbGVhc3VyZQ==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp(base64_encode($x4), "YW55IGNhcm5hbCBwbGVhc3Vy") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (strcmp(base64_encode($x5), "YW55IGNhcm5hbCBwbGVhc3U=") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp(base64_encode($x6), "YW55IGNhcm5hbCBwbGVhcw==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (strcmp(base64_encode($x7), "+A==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp(base64_encode($x8), "/A==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$y1 = libcore__base64url_decode(libcore__base64url_encode($x1));
	$y2 = libcore__base64url_decode(libcore__base64url_encode($x2));
	$y3 = libcore__base64url_decode(libcore__base64url_encode($x3));
	$y4 = libcore__base64url_decode(libcore__base64url_encode($x4));
	$y5 = libcore__base64url_decode(libcore__base64url_encode($x5));
	$y6 = libcore__base64url_decode(libcore__base64url_encode($x6));
	$y7 = libcore__base64url_decode(libcore__base64url_encode($x7));
	$y8 = libcore__base64url_decode(libcore__base64url_encode($x8));


	if (strcmp($y1, "any carnal pleasure..") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (strcmp($y2, "any carnal pleasure.") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (strcmp($y3, "any carnal pleasure") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (strcmp($y4, "any carnal pleasur") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (strcmp($y5, "any carnal pleasu") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (strcmp($y6, "any carnal pleas") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}
	if (strcmp(sprintf("%02x", ord($y7)), "f8") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}
	if (strcmp(sprintf("%02x", ord($y8)), "fc") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__base64url_encode()
 */
(function()
{
	$__FUNCTION__='libcore__base64url_encode';
	$start = libcore__get_unixmicrotime();


	$x1 = "any carnal pleasure..";
	$x2 = "any carnal pleasure.";
	$x3 = "any carnal pleasure";
	$x4 = "any carnal pleasur";
	$x5 = "any carnal pleasu";
	$x6 = "any carnal pleas";
	$x7 = chr(hexdec("f8"));
	$x8 = chr(hexdec("fc"));


	if (strcmp(base64_encode($x1), "YW55IGNhcm5hbCBwbGVhc3VyZS4u") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp(base64_encode($x2), "YW55IGNhcm5hbCBwbGVhc3VyZS4=") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (strcmp(base64_encode($x3), "YW55IGNhcm5hbCBwbGVhc3VyZQ==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp(base64_encode($x4), "YW55IGNhcm5hbCBwbGVhc3Vy") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (strcmp(base64_encode($x5), "YW55IGNhcm5hbCBwbGVhc3U=") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp(base64_encode($x6), "YW55IGNhcm5hbCBwbGVhcw==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (strcmp(base64_encode($x7), "+A==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp(base64_encode($x8), "/A==") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$y1 = libcore__base64url_encode($x1);
	$y2 = libcore__base64url_encode($x2);
	$y3 = libcore__base64url_encode($x3);
	$y4 = libcore__base64url_encode($x4);
	$y5 = libcore__base64url_encode($x5);
	$y6 = libcore__base64url_encode($x6);
	$y7 = libcore__base64url_encode($x7);
	$y8 = libcore__base64url_encode($x8);


	if (strcmp($y1, "YW55IGNhcm5hbCBwbGVhc3VyZS4u") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (strcmp($y2, "YW55IGNhcm5hbCBwbGVhc3VyZS4") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (strcmp($y3, "YW55IGNhcm5hbCBwbGVhc3VyZQ") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (strcmp($y4, "YW55IGNhcm5hbCBwbGVhc3Vy") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (strcmp($y5, "YW55IGNhcm5hbCBwbGVhc3U") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (strcmp($y6, "YW55IGNhcm5hbCBwbGVhcw") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}
	if (strcmp($y7, "-A") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}
	if (strcmp($y8, "_A") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__bin_to_uint64()
 */
(function()
{
	$__FUNCTION__='libcore__bin_to_uint64';
	$start = libcore__get_unixmicrotime();


	$bin = hex2bin("0807060504030201");


	$rc = libcore__bin_to_uint64($bin);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if ($rc->get_value() !== 72623859790382856)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__cmp_value()
 */
(function()
{
	$__FUNCTION__='libcore__cmp_value';
	$start = libcore__get_unixmicrotime();


	$o1 = new stdClass();
	$o1->x = new stdClass();

	$o2 = new stdClass();

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 1, 'red'  => 2, 'green'  => 5, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'red'    => 2, 'purple' => 4);

	if (libcore__cmp_value($o1, $o2) === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
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
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$o1 = new stdClass();
	$o1->x = array('blue'  => 6, 'red'  => 2, 'green'  => 5, 'purple' => 4);

	$o2 = new stdClass();
	$o2->x = array('green' => 5, 'blue' => 6, 'red'    => 2, 'purple' => 4);

	if (libcore__cmp_value($o1, $o2) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__flag2bool()
 */
(function()
{
	$__FUNCTION__='libcore__flag2bool';
	$start = libcore__get_unixmicrotime();


	if (libcore__flag2bool("0") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__flag2bool("1") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__flag2int()
 */
(function()
{
	$__FUNCTION__='libcore__flag2int';
	$start = libcore__get_unixmicrotime();


	if (libcore__flag2int("0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__flag2int("1") === 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__flag2str()
 */
(function()
{
	$__FUNCTION__='libcore__flag2str';
	$start = libcore__get_unixmicrotime();


	if (strcmp(libcore__flag2str("0"), "false") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (strcmp(libcore__flag2str("1"), "true") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__hex2bin()
 */
(function()
{
	$__FUNCTION__='libcore__hex2bin';
	$start = libcore__get_unixmicrotime();


	$x = 'super puper';

	$x_hex = bin2hex($x);

	$y = libcore__hex2bin($x_hex, true);

	if ($x !== $y)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__hex_string_add()
 */
(function()
{
	$__FUNCTION__='libcore__hex_string_add';
	$start = libcore__get_unixmicrotime();


	$x = "1";
	$y = "2";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "03") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$x = "fe";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "ff") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$x = "ff";
	$y = "1";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "0100") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	$x = "ff";
	$y = "ff";
	$z = libcore__hex_string_add($x, $y);
	if (strcmp($z, "01fe") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
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
			echo "ERROR[".$__FUNCTION__."()]: step005\n";
			echo "a      : ".$a."\n";
			echo "b      : ".$b."\n";
			echo "c1     : ".$c1."\n";
			echo "c2     : ".$c2."\n";
			exit(1);
		}
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__hex_string_expand()
 */
(function()
{
	$__FUNCTION__='libcore__hex_string_expand';
	$start = libcore__get_unixmicrotime();


	$x = libcore__hex_string_expand("0", 2);
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$x = libcore__hex_string_expand("00", 2);
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__hex_string_parity()
 */
(function()
{
	$__FUNCTION__='libcore__hex_string_parity';
	$start = libcore__get_unixmicrotime();


	$x = libcore__hex_string_parity("0");
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$x = libcore__hex_string_parity("00");
	if (strcmp($x, "00") != 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_flag_set()
 */
(function()
{
	$__FUNCTION__='libcore__is_flag_set';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_flag_set(false) !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (libcore__is_flag_set(true) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	if (libcore__is_flag_set(0) !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (libcore__is_flag_set(100) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	if (libcore__is_flag_set("false") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (libcore__is_flag_set("true") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	if (libcore__is_flag_set("no") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (libcore__is_flag_set("yes") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	if (libcore__is_flag_set("off") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (libcore__is_flag_set("on") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}


	if (libcore__is_flag_set("0") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (libcore__is_flag_set("1") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_flag()
 */
(function()
{
	$__FUNCTION__='libcore__is_flag';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_flag("moon") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_flag_unset("moon") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_flag_set("moon") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_flag(0) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_flag(1) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_flag_unset()
 */
(function()
{
	$__FUNCTION__='libcore__is_flag_unset';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_flag_unset(false) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (libcore__is_flag_unset(true) !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	if (libcore__is_flag_unset(0) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (libcore__is_flag_unset(100) !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	if (libcore__is_flag_unset("false") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (libcore__is_flag_unset("true") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	if (libcore__is_flag_unset("no") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (libcore__is_flag_unset("yes") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	if (libcore__is_flag_unset("off") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (libcore__is_flag_unset("on") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}


	if (libcore__is_flag_unset("0") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (libcore__is_flag_unset("1") !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_float()
 */
(function()
{
	$__FUNCTION__='libcore__is_float';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_float("") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_float("1") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_float("1.00") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (libcore__is_float("1.0.0") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (libcore__is_float("1.") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (libcore__is_float(".1") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (libcore__is_float(".1.") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_hex()
 */
(function()
{
	$__FUNCTION__='libcore__is_hex';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_hex("") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_hex("z") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_hex("0") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

//for ($i=0; $i < 1000000; $i++)
//{
	if (libcore__is_hex("0123456789abcdefABCDEF") == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
//}

	if (libcore__is_hex("0123456789abcdefABCDEF0", true) == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_parity()
 */
(function()
{
	$__FUNCTION__='libcore__is_parity';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_parity(1) == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_parity(2) == false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_sint()
 */
(function()
{
	$__FUNCTION__='libcore__is_sint';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_sint("") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_sint("+1+") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	if (libcore__is_sint("-1-") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_uint()
 */
(function()
{
	$__FUNCTION__='libcore__is_uint';
	$start = libcore__get_unixmicrotime();


	if (libcore__is_uint("") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (libcore__is_uint("+1") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (libcore__is_uint("-1") == true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__is_uuid()
 */
(function()
{
	$__FUNCTION__='libcore__is_uuid';
	$start = libcore__get_unixmicrotime();


/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE38') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE36') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE34') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}', 'TYPE32') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12]') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a1z}') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}


	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE38') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE36') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE34') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12', 'TYPE32') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d+6bb9bd380a12') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a1z') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}


	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE38') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE36') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step017\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE34') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step018\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12}', 'TYPE32') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step019\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a12]') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step020\n";
		exit(1);
	}
	if (libcore__is_uuid('{a0eebc999c0b4ef8bb6d6bb9bd380a1z}') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step021\n";
		exit(1);
	}


	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step022\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE38') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step023\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE36') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step024\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE34') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step025\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a12', 'TYPE32') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step026\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a1}') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step027\n";
		exit(1);
	}
	if (libcore__is_uuid('a0eebc999c0b4ef8bb6d6bb9bd380a1z') === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step028\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__luhn_chk()
 */
(function()
{
	$__FUNCTION__='libcore__luhn_chk';
	$start = libcore__get_unixmicrotime();


	function libcore__luhn_chk__test($a, $b)
	{
/*
		$rc = libcore__luhn_sum($a);
		if ($rc->is_ok() === false)
		{
			return false;
		}
		$luhn_sum = $rc->get_value();
		if ($luhn_sum !== $b)
		{
//			echo "luhn sum is bad\n";
			return false;
		}
//		echo "luhn_sum: ".$luhn_sum."\n";
*/

		if (luhn_chk($b) === false)
		{
//			echo "luhn sum is bad\n";
			return false;
		}


//		echo "luhn sum is ok\n";
		return true;
	}


	$a = "456126121234546";
	$b = "4561261212345467";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$a = "7992739871";
	$b = "79927398713";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


//6376830
	$a = "637683000017475"; // "00017475";
	$b = "6376830000174758"; // "000174758";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$a = "637683000017476";
	$b = "6376830000174766";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$a = "637683000017477";
	$b = "6376830000174774";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$a = "637683000017478";
	$b = "6376830000174782";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$a = "637683000017479";
	$b = "6376830000174790";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}


	$a = "637683000017480";
	$b = "6376830000174808";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$a = "637683000017565";
	$b = "6376830000175656";
	if (libcore__luhn_chk__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__luhn_sum()
 */
(function()
{
	$__FUNCTION__='libcore__luhn_sum';
	$start = libcore__get_unixmicrotime();


	function libcore__luhn_sum__test($a, $b)
	{
		$rc = libcore__luhn_sum($a);
		if ($rc->is_ok() === false)
		{
			return false;
		}
		$luhn_sum = $rc->get_value();
		if ($luhn_sum !== $b)
		{
//			echo "luhn sum is bad\n";
			return false;
		}
//		echo "luhn_sum: ".$luhn_sum."\n";

/*
		if (luhn_chk($b) === false)
		{
//			echo "luhn sum is bad\n";
			return false;
		}
*/

//		echo "luhn sum is ok\n";
		return true;
	}


	$a = "456126121234546";
	$b = "4561261212345467";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$a = "7992739871";
	$b = "79927398713";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


//6376830
	$a = "637683000017475";  // "00017475";
	$b = "6376830000174758"; // "000174758";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$a = "637683000017476";
	$b = "6376830000174766";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$a = "637683000017477";
	$b = "6376830000174774";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$a = "637683000017478";
	$b = "6376830000174782";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$a = "637683000017479";
	$b = "6376830000174790";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}


	$a = "637683000017480";
	$b = "6376830000174808";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$a = "637683000017565";
	$b = "6376830000175656";
	if (libcore__luhn_sum__test($a, $b) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__remove_from_head()
 */
(function()
{
	$__FUNCTION__='libcore__remove_from_head';
	$start = libcore__get_unixmicrotime();


	$str = libcore__remove_from_head("/dir/", "/");
	if (strcmp($str, "dir/") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$str = libcore__remove_from_head("dir/", "/");
	if (strcmp($str, "dir/") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__remove_from_tail()
 */
(function()
{
	$__FUNCTION__='libcore__remove_from_tail';
	$start = libcore__get_unixmicrotime();


	$str = libcore__remove_from_tail("/dir/", "/");
	if (strcmp($str, "/dir") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$str = libcore__remove_from_tail("/dir", "/");
	if (strcmp($str, "/dir") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__rnd()
 */
(function()
{
	$__FUNCTION__='libcore__rnd';
	$start = libcore__get_unixmicrotime();


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
				echo "ERROR[".$__FUNCTION__."()]: step001\n";
				exit(1);
			}

			$count++;

			if ($count == 100000000)
			{
				echo "ERROR[".$__FUNCTION__."()]: step002\n";
				exit(1);
			}
		}
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__remove_from_tail()
 */
(function()
{
	$__FUNCTION__='libcore__route';
	$start = libcore__get_unixmicrotime();



	$route_template = '/api/v1/companies/{id}/users/{userId}';
	$route_path = '/api/v1/companies/0a/users/0b?nextKey=0&limit=123&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'id') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '0b') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}
	if (strcmp($route_path_data['id'], '0a') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/{id}/users/{userId}';
	$route_path = '/api/v1/companies/0a/users/0b?nextKey=0&limit=123&userId=321&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step017\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step018\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step019\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step020\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step021\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step022\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step023\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'id') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step024\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step025\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step026\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '321') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step027\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step028\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step029\n";
		exit(1);
	}
	if (strcmp($route_path_data['id'], '0a') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step030\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/{id}/users';
	$route_path = '/api/v1/companies/0a/users?nextKey=0&limit=123&userId=321&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step031\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step032\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();
	if (count($route_path_data) !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step033\n";
		exit(1);
	}

	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step034\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step035\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step036\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step037\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step038\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'id') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step039\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step040\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step041\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '321') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step042\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step043\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step044\n";
		exit(1);
	}
	if (strcmp($route_path_data['id'], '0a') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step045\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users';
	$route_path = '/api/v1/companies/users?nextKey=0&limit=123&userId=321&a=&b';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step046\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step047\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step048\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'nextKey') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step049\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'limit') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step050\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'userId') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step051\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'a') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step052\n";
		exit(1);
	}
	if (property_exists((object)$route_path_data, 'b') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step053\n";
		exit(1);
	}

	if (strcmp($route_path_data['nextKey'], '0') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step054\n";
		exit(1);
	}
	if (strcmp($route_path_data['limit'], '123') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step055\n";
		exit(1);
	}
	if (strcmp($route_path_data['userId'], '321') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step056\n";
		exit(1);
	}
	if (strcmp($route_path_data['a'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step057\n";
		exit(1);
	}
	if (strcmp($route_path_data['b'], '') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step058\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users';
	$route_path = '/api/v1/companies/users';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step059\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step060\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step061\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users/';
	$route_path = '/api/v1/companies/users';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step062\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step063\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();
	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step064\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users';
	$route_path = '/api/v1/companies/users/';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step065\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step066\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step067\n";
		exit(1);
	}



	$route_template = '/api/v1/companies/users/';
	$route_path = '/api/v1/companies/users/';

// validate route template
	$rc = libcore__route_template_validate($route_template);
	if ($rc->is_ok() === false)
	{
		echo "[route_template:".$route_template."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step068\n";
		exit(1);
	}
	$route_template_data = $rc->get_value();

// validate route path
	$rc = libcore__route_path_validate($route_template_data, $route_path);
	if ($rc->is_ok() === false)
	{
		echo "[route_path:".$route_path."]\n";
		echo "ERROR[".$__FUNCTION__."()]: step069\n";
		exit(1);
	}
	$route_path_data = $rc->get_value();

	if (count($route_path_data) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step070\n";
		exit(1);
	}


// make handler
//	function libcore__route_handler(&$arg)
	$handler = function (&$arg)
	{
//		echo "---=== libcore__route_handler() ===---\n";

		if (strcmp($arg->{'id'}, '0a') !== 0)
		{
			echo "WARNING: id is alien\n";
			return;
		}

		if (strcmp($arg->{'userId'}, '0b') !== 0)
		{
			echo "WARNING: userId is alien\n";
			return;
		}

		if (strcmp($arg->{'nextKey'}, '0') !== 0)
		{
			echo "WARNING: nextKey is alien\n";
			return;
		}

		if (strcmp($arg->{'limit'}, '123') !== 0)
		{
			echo "WARNING: limit is alien\n";
			return;
		}

		if (strcmp($arg->{'a'}, '') !== 0)
		{
			echo "WARNING: a is alien\n";
			return;
		}

		if (strcmp($arg->{'b'}, '') !== 0)
		{
			echo "WARNING: b is alien\n";
			return;
		}

		$arg->{'value'} = 7;
	};


// route
	$arg = (object)[];
	$method = 'GET';
	$path = '/api/v1/companies/0a/users/0b?nextKey=0&limit=123&a=&b';
	$rc = libcore__route($arg, $method, $path,
	[
//		[ 'GET', '/api/v1/companies/{id}/users/{userId}', 'libcore__route_handler' ]
		[ 'GET', '/api/v1/companies/{id}/users/{userId}', $handler ]
	]);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step071\n";
		exit(1);
	}
	$arg = $rc->get_value();
	$route_callback = $arg->{'route_callback'};



// check value before call handler
	$arg->{'value'} = 5;
	if ($arg->{'value'} !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step072\n";
		exit(1);
	}


// call handler
	$route_callback($arg);


// check value after call handler
	if ($arg->{'value'} !== 7)
	{
		echo "ERROR[".$__FUNCTION__."()]: step073\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__tojson()
 */
(function()
{
	$__FUNCTION__='libcore__tojson';
	$start = libcore__get_unixmicrotime();


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
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$rc = libcore__tojson("\x22");
	if (strcmp($rc, '\"') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__tojson("\x5c");
	if (strcmp($rc, "\\\\") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	$rc = libcore__tojson("\x2f");
	if (strcmp($rc, '\/') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__tojson("\x08");
	if (strcmp($rc, '\b') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0c");
	if (strcmp($rc, '\f') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0a");
	if (strcmp($rc, '\n') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}

	$rc = libcore__tojson("\x0d");
	if (strcmp($rc, '\r') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}

	$rc = libcore__tojson("\x09");
	if (strcmp($rc, '\t') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__uint64_to_bin()
 */
(function()
{
	$__FUNCTION__='libcore__uint64_to_bin';
	$start = libcore__get_unixmicrotime();


	$val = 72623859790382856;
	$rc = libcore__uint64_to_bin($val);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$bin = $rc->get_value();

	$hex = bin2hex($bin);

	if (strcmp($hex, "0807060504030201") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$val = 30;
	$rc = libcore__uint64_to_bin($val);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	$bin = $rc->get_value();

	$hex = bin2hex($bin);

	if (strcmp($hex, "1e00000000000000") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__uuid2type32()
 */
(function()
{
	$__FUNCTION__='libcore__uuid2type32';
	$start = libcore__get_unixmicrotime();


/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	$rc = libcore__uuid2type32('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a13') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type32('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a12') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type32('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a17') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type32('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc999c0b4ef8bb6d6bb9bd380a16') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__uuid2type34()
 */
(function()
{
	$__FUNCTION__='libcore__uuid2type34';
	$start = libcore__get_unixmicrotime();


/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	$rc = libcore__uuid2type34('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a13}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type34('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a12}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type34('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a17}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type34('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc999c0b4ef8bb6d6bb9bd380a16}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__uuid2type36()
 */
(function()
{
	$__FUNCTION__='libcore__uuid2type36';
	$start = libcore__get_unixmicrotime();


/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	$rc = libcore__uuid2type36('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a17') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type36('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, 'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a16') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__uuid2type38()
 */
(function()
{
	$__FUNCTION__='libcore__uuid2type38';
	$start = libcore__get_unixmicrotime();


/*
 0         1         2         3
 01234567890123456789012345678901234567
'{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}' // 38
'a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12'   // 36
'{a0eebc999c0b4ef8bb6d6bb9bd380a17}'     // 34
'a0eebc999c0b4ef8bb6d6bb9bd380a16'       // 32
*/
	$rc = libcore__uuid2type38('{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a13}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	$rc = libcore__uuid2type38('a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a12}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	$rc = libcore__uuid2type38('{a0eebc999c0b4ef8bb6d6bb9bd380a17}');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a17}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	$rc = libcore__uuid2type38('a0eebc999c0b4ef8bb6d6bb9bd380a16');
	if ($rc === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($rc, '{a0eebc99-9c0b-4ef8-bb6d-6bb9bd380a16}') !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__var2flag()
 */
(function()
{
	$__FUNCTION__='libcore__var2flag';
	$start = libcore__get_unixmicrotime();


	if (strcmp(libcore__var2flag(false),   "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(0),       "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("false"), "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("off"),   "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("0"),     "0") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(true),    "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag(100),     "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("true"),  "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("on"),    "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (strcmp(libcore__var2flag("1"),     "1") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__xml_to_object()
 */
(function()
{
	$__FUNCTION__='libcore__xml_to_object';
	$start = libcore__get_unixmicrotime();


	$requestXml = '';
	$requestXml .= '<?xml version="1.0" encoding="UTF-8"?>';
	$requestXml .= '<Order>';
	$requestXml .= '    <row>';
	$requestXml .= '        <id>771</id>';
	$requestXml .= '        <OrderParams>';
	$requestXml .= '            <Paramname>email</Paramname>';
	$requestXml .= '            <Val>user@domen.com</Val>';
	$requestXml .= '            <Paramname>phone</Paramname>';
	$requestXml .= '            <Val>1234567890</Val>';
	$requestXml .= '        </OrderParams>';
	$requestXml .= '    </row>';
	$requestXml .= '</Order>';

	$rc = libcore__xml_to_object($requestXml);
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$response = $rc->get_value();

	if (@is_object($response) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if (@is_object($response->{'row'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'id'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}

	if (@is_object($response->{'row'}->{'OrderParams'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}

	if (@is_array($response->{'row'}->{'OrderParams'}->{'Paramname'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Paramname'}[0]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Paramname'}[0], 'email') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Paramname'}[1]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Paramname'}[1], 'phone') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}

	if (@is_array($response->{'row'}->{'OrderParams'}->{'Val'}) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Val'}[0]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Val'}[0], 'user@domen.com') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		exit(1);
	}

	if (@is_string($response->{'row'}->{'OrderParams'}->{'Val'}[1]) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		exit(1);
	}

	if (strcmp($response->{'row'}->{'OrderParams'}->{'Val'}[1], '1234567890') === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__file_copy()
 */
(function()
{

/*

$rc = libcore__file_copy("/tmp/x.php", "/tmp/10/z", true);
if ($rc === false)
{
	echo "error libcore__file_copy()\n";
	exit(1);
}

echo "ok\n";

*/

})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__daymicrotime_text_to_daymicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__daymicrotime_text_to_daymicrotime';
	$start = libcore__get_unixmicrotime();


	$rc = libcore__daymicrotime_text_to_daymicrotime("23:59:59.999999");
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$value = $rc->get_value();
	if (strcmp($value, "86399999999") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$rc = libcore__daymicrotime_text_to_daymicrotime("23:59:59.abcdef");
	if ($rc->is_ok() === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__get_gmt_offset()
 */
(function()
{
	$__FUNCTION__='libcore__get_gmt_offset';
	$start = libcore__get_unixmicrotime();


	$tz = date_default_timezone_get();
//	echo "tz:".$tz."\n";


	$old_gmt_offset = libcore__get_gmt_offset();


	if (date_default_timezone_set("UTC") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}


	$gmt_offset = libcore__get_gmt_offset();
	if ($gmt_offset !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "gmt_offset:".$gmt_offset."\n";
		exit(1);
	}


	if (date_default_timezone_set("Europe/Moscow") === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$gmt_offset = libcore__get_gmt_offset();
	if ($gmt_offset !== 180)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		echo "gmt_offset:".$gmt_offset."\n";
		exit(1);
	}


	if (date_default_timezone_set($tz) === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$new_gmt_offset = libcore__get_gmt_offset();


	if (strcmp($old_gmt_offset, $new_gmt_offset) !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();


//	$stop = libcore__get_unixmicrotime();
//	$rc = libcore__unixmicrointerval_to_text($stop - $start);
//	if ($rc->is_ok() === false)
//	{
//		echo "ERROR[".$__FUNCTION__."()]: libcore__unixmicrointerval_to_text is broken\n";
//		exit(1);
//	}
//	echo $__FUNCTION__."(): ".($rc->get_value())."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__get_unixmicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__get_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$gmt_offset = libcore__get_gmt_offset();


	$time_start = time();
	$time_start += ($gmt_offset * 60);


	$unixmicrotime = libcore__get_unixmicrotime();
//echo "unixmicrotime:".$unixmicrotime."\n";


	$time_stop = time();
	$time_stop += ($gmt_offset * 60);


	if (strlen($unixmicrotime) != 16)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	$unixtime = substr($unixmicrotime, 0, 10);
//echo "unixtime:".$unixtime."\n";
//echo "time_stop:".$time_stop."\n";

	if ($unixtime < $time_start)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}

	if ($unixtime > $time_stop)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
	require_once("../submodule/libcore.php/libcore.php");


	$unixmicrotime = libcore__get_unixmicrotime(true);
	$iso8601 = libcore__unixmicrotime_to_iso8601($unixmicrotime, 0);
	echo $iso8601."\n"; // 2020-05-22 16:05:43.941446+0000


	$unixmicrotime = libcore__get_unixmicrotime();
	$iso8601 = libcore__unixmicrotime_to_iso8601($unixmicrotime);
	echo $iso8601."\n"; // 2020-05-22 19:05:43.941630+0300


	$unixmicrotime = libcore__get_unixmicrotime();
	$iso8601 = libcore__unixmicrotime_to_iso8601($unixmicrotime, null, false);
	echo $iso8601."\n"; // 2020-05-22 19:05:43.944010
*///-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__get_unixtime()
 */
(function()
{
	$__FUNCTION__='libcore__get_unixtime';
	$start = libcore__get_unixmicrotime();


	$time_start = time();

	$unixtime = libcore__get_unixtime();

	$time_stop = time();


	if ($unixtime < $time_start)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}

	if ($unixtime > $time_stop)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__iso8601_to_unixmicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__iso8601_to_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$test_list =
	[
		[ 'in'=> '',                                 'out'=> '',                 'flag_invalid'=> true  ],

		[ 'in'=> '20050809',                         'out'=> '1123545600000000', 'flag_invalid'=> false ], // 9 августа 2005 года

		[ 'in'=> '20050809Z',                        'out'=> '1123545600000000', 'flag_invalid'=> false ], // 9 августа 2005 года

		[ 'in'=> '20050809T183142',                  'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '20050809T183142.1',                'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '20050809T183142.21',               'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '20050809T183142.321',              'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '20050809T183142.4321',             'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '20050809T183142.54321',            'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '20050809T183142.654321',           'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '20050809T183142Z',                 'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '20050809T183142.1Z',               'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '20050809T183142.21Z',              'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '20050809T183142.321Z',             'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '20050809T183142.4321Z',            'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '20050809T183142.54321Z',           'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '20050809T183142.654321Z',          'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '20050809T183142+03',               'out'=> '1123601502000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'in'=> '20050809T183142.1+03',             'out'=> '1123601502000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.21+03',            'out'=> '1123601502000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.321+03',           'out'=> '1123601502000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.4321+03',          'out'=> '1123601502004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.54321+03',         'out'=> '1123601502054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.654321+03',        'out'=> '1123601502654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'in'=> '20050809T183142+0330',             'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.1+0330',           'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.21+0330',          'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.321+0330',         'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.4321+0330',        'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.54321+0330',       'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.654321+0330',      'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '20050809T183142+03:30',            'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.1+03:30',          'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.21+03:30',         'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.321+03:30',        'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.4321+03:30',       'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.54321+03:30',      'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.654321+03:30',     'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '20050809T183142-03',               'out'=> '1123623102000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'in'=> '20050809T183142.1-03',             'out'=> '1123623102000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.21-03',            'out'=> '1123623102000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.321-03',           'out'=> '1123623102000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.4321-03',          'out'=> '1123623102004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.54321-03',         'out'=> '1123623102054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.654321-03',        'out'=> '1123623102654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'in'=> '20050809T183142-0330',             'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.1-0330',           'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.21-0330',          'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.321-0330',         'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.4321-0330',        'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.54321-0330',       'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.654321-0330',      'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '20050809T183142-03:30',            'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.1-03:30',          'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.21-03:30',         'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.321-03:30',        'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.4321-03:30',       'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.54321-03:30',      'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.654321-03:30',     'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09',                       'out'=> '1123545600000000', 'flag_invalid'=> false ], // 9 августа 2005 года

		[ 'in'=> '2005-08-09Z',                      'out'=> '1123545600000000', 'flag_invalid'=> false ], // 9 августа 2005 года

		[ 'in'=> '2005-08-09T18:31:42',              'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '2005-08-09T18:31:42.1',            'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.21',           'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.321',          'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.4321',         'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.54321',        'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.654321',       'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '2005-08-09T18:31:42Z',             'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '2005-08-09T18:31:42.1Z',           'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.21Z',          'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.321Z',         'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.4321Z',        'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.54321Z',       'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.654321Z',      'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '2005-08-09T18:31:42+03',           'out'=> '1123601502000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.1+03',         'out'=> '1123601502000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.21+03',        'out'=> '1123601502000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.321+03',       'out'=> '1123601502000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.4321+03',      'out'=> '1123601502004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.54321+03',     'out'=> '1123601502054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.654321+03',    'out'=> '1123601502654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'in'=> '2005-08-09T18:31:42+0330',         'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1+0330',       'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21+0330',      'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321+0330',     'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321+0330',    'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321+0330',   'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321+0330',  'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09T18:31:42+03:30',        'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1+03:30',      'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21+03:30',     'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321+03:30',    'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321+03:30',   'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321+03:30',  'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321+03:30', 'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09T18:31:42-03',           'out'=> '1123623102000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.1-03',         'out'=> '1123623102000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.21-03',        'out'=> '1123623102000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.321-03',       'out'=> '1123623102000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.4321-03',      'out'=> '1123623102004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.54321-03',     'out'=> '1123623102054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.654321-03',    'out'=> '1123623102654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'in'=> '2005-08-09T18:31:42-0330',         'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1-0330',       'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21-0330',      'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321-0330',     'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321-0330',    'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321-0330',   'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321-0330',  'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09T18:31:42-03:30',        'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1-03:30',      'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21-03:30',     'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321-03:30',    'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321-03:30',   'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321-03:30',  'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321-03:30', 'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42',              'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '2005-08-09 18:31:42.1',            'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.21',           'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.321',          'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.4321',         'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.54321',        'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.654321',       'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '2005-08-09 18:31:42Z',             'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '2005-08-09 18:31:42.1Z',           'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.21Z',          'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.321Z',         'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.4321Z',        'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.54321Z',       'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.654321Z',      'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '2005-08-09 18:31:42+03',           'out'=> '1123601502000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.1+03',         'out'=> '1123601502000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.21+03',        'out'=> '1123601502000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.321+03',       'out'=> '1123601502000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.4321+03',      'out'=> '1123601502004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.54321+03',     'out'=> '1123601502054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.654321+03',    'out'=> '1123601502654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'in'=> '2005-08-09 18:31:42+0330',         'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1+0330',       'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21+0330',      'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321+0330',     'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321+0330',    'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321+0330',   'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321+0330',  'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42+03:30',        'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1+03:30',      'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21+03:30',     'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321+03:30',    'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321+03:30',   'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321+03:30',  'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321+03:30', 'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42-03',           'out'=> '1123623102000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.1-03',         'out'=> '1123623102000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.21-03',        'out'=> '1123623102000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.321-03',       'out'=> '1123623102000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.4321-03',      'out'=> '1123623102004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.54321-03',     'out'=> '1123623102054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.654321-03',    'out'=> '1123623102654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'in'=> '2005-08-09 18:31:42-0330',         'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1-0330',       'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21-0330',      'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321-0330',     'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321-0330',    'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321-0330',   'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321-0330',  'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42-03:30',        'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1-03:30',      'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21-03:30',     'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321-03:30',    'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321-03:30',   'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321-03:30',  'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321-03:30', 'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут
	];
	$test_list_size = count($test_list);


	for ($i=0; $i < $test_list_size; $i++)
	{
		$in           = $test_list[$i]['in'];
		$out          = $test_list[$i]['out'];
		$flag_invalid = $test_list[$i]['flag_invalid'];

		$rc = libcore__iso8601_to_unixmicrotime($in);

		if ($flag_invalid === false)
		{
			if ($rc === false)
			{
				echo "ERROR[".$__FUNCTION__."()]: step001\n";
				exit(1);
			}
		}

		if (strcmp($rc, $out) !== 0)
		{
			echo "ERROR[".$__FUNCTION__."()]: step002\n";
			exit(1);
		}
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__parse_daymicrotime_text()
 */
(function()
{
	$__FUNCTION__='libcore__parse_daymicrotime_text';
	$start = libcore__get_unixmicrotime();


	$rc = libcore__parse_daymicrotime_text("23:59:59.999999");
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$value = $rc->get_value();
	if (strcmp($value->hour, "23") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}
	if (strcmp($value->min, "59") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	if (strcmp($value->sec, "59") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}
	if (strcmp($value->microsec, "999999") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}


	$rc = libcore__parse_daymicrotime_text("01:23:45.987654");
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}
	$value = $rc->get_value();
	if (strcmp($value->hour, "01") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	if (strcmp($value->min, "23") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}
	if (strcmp($value->sec, "45") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	if (strcmp($value->microsec, "987654") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		exit(1);
	}


	$rc = libcore__parse_daymicrotime_text("23:59:59.abcdef");
	if ($rc->is_ok() === true)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrointerval_to_text()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrointerval_to_text';
	$start = libcore__get_unixmicrotime();


// test1
	$rc = libcore__unixmicrointerval_to_text('40');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "40 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


// test2
	$rc = libcore__unixmicrointerval_to_text('59310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "59 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		exit(1);
	}


// test3
	$rc = libcore__unixmicrointerval_to_text('77310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "1 mins 17 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		exit(1);
	}


// test4
	$rc = libcore__unixmicrointerval_to_text('3677310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "1 hours 1 mins 17 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		exit(1);
	}


// test5
	$rc = libcore__unixmicrointerval_to_text('90077310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "1 days 1 hours 1 mins 17 secs 310040 microseconds") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010 ".$value."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrotime_to_daymicrotime_text()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrotime_to_daymicrotime_text';
	$start = libcore__get_unixmicrotime();


	$rc = libcore__unixmicrotime_to_daymicrotime_text('1508150177310040');
	if ($rc->is_ok() === false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		exit(1);
	}
	$value = $rc->get_value();

	if (strcmp($value, "10:36:17.310040") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrotime_to_dayofweek()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrotime_to_dayofweek';
	$start = libcore__get_unixmicrotime();


	$day_of_week = libcore__unixmicrotime_to_dayofweek('', false);
	if ($day_of_week !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('', true);
	if ($day_of_week !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

//1537180149866429 '2018-09-17 13:29:09.866429' Пн Monday    FALSE:1 TRUE:1
//1537266549866429 '2018-09-18 13:29:09.866429' Вт Tuesday   FALSE:2 TRUE:2
//1537352949866429 '2018-09-19 13:29:09.866429' Ср Wednesday FALSE:3 TRUE:3
//1537439349866429 '2018-09-20 13:29:09.866429' Чт Thursday  FALSE:4 TRUE:4
//1537525749866429 '2018-09-21 13:29:09.866429' Пт Friday    FALSE:5 TRUE:5
//1537612149866429 '2018-09-22 13:29:09.866429' Сб Saturday  FALSE:6 TRUE:6
//1537698549866429 '2018-09-23 13:29:09.866429' Вс Sunday    FALSE:0 TRUE:7

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537180149866429', false);
	if ($day_of_week !== 1)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537266549866429', false);
	if ($day_of_week !== 2)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537352949866429', false);
	if ($day_of_week !== 3)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537439349866429', false);
	if ($day_of_week !== 4)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537525749866429', false);
	if ($day_of_week !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537612149866429', false);
	if ($day_of_week !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537698549866429', false);
	if ($day_of_week !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

//1537180149866429 '2018-09-17 13:29:09.866429' Пн Monday    FALSE:1 TRUE:1
//1537266549866429 '2018-09-18 13:29:09.866429' Вт Tuesday   FALSE:2 TRUE:2
//1537352949866429 '2018-09-19 13:29:09.866429' Ср Wednesday FALSE:3 TRUE:3
//1537439349866429 '2018-09-20 13:29:09.866429' Чт Thursday  FALSE:4 TRUE:4
//1537525749866429 '2018-09-21 13:29:09.866429' Пт Friday    FALSE:5 TRUE:5
//1537612149866429 '2018-09-22 13:29:09.866429' Сб Saturday  FALSE:6 TRUE:6
//1537698549866429 '2018-09-23 13:29:09.866429' Вс Sunday    FALSE:0 TRUE:7


	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537180149866429', true);
	if ($day_of_week !== 1)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537266549866429', true);
	if ($day_of_week !== 2)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537352949866429', true);
	if ($day_of_week !== 3)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537439349866429', true);
	if ($day_of_week !== 4)
	{
		echo "ERROR[".$__FUNCTION__."()]: step013\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537525749866429', true);
	if ($day_of_week !== 5)
	{
		echo "ERROR[".$__FUNCTION__."()]: step014\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537612149866429', true);
	if ($day_of_week !== 6)
	{
		echo "ERROR[".$__FUNCTION__."()]: step015\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}

	$day_of_week = libcore__unixmicrotime_to_dayofweek('1537698549866429', true);
	if ($day_of_week !== 7)
	{
		echo "ERROR[".$__FUNCTION__."()]: step016\n";
		echo "day_of_week:".$day_of_week."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrotime_to_iso8601()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrotime_to_iso8601';
	$start = libcore__get_unixmicrotime();


	$iso8601 = libcore__unixmicrotime_to_iso8601('1508150177310040');
	if (strcmp($iso8601, "2017-10-16 10:36:17.310040+0300") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('1508150177310040', 0);
	if (strcmp($iso8601, "2017-10-16 10:36:17.310040+0000") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('1508150177310040', 0, false);
	if (strcmp($iso8601, "2017-10-16 10:36:17.310040") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('0', 0);
	if (strcmp($iso8601, "1970-01-01 00:00:00.000000+0000") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step004\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('0');
	if (strcmp($iso8601, "1970-01-01 00:00:00.000000+0300") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step005\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('1');
	if (strcmp($iso8601, "1970-01-01 00:00:00.000001+0300") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step006\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('0', 1);
	if (strcmp($iso8601, "1970-01-01 00:00:00.000000+0001") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step007\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('1508150177310040', 180);
	if (strcmp($iso8601, "2017-10-16 10:36:17.310040+0300") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step008\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('1508150177310040', -180);
	if (strcmp($iso8601, "2017-10-16 10:36:17.310040-0300") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step009\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601(null);
	if (strcmp($iso8601, "1970-01-01 00:00:00.000000+0300") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step010\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('aaa', 'bbb');
	if (strcmp($iso8601, "1970-01-01 00:00:00.000000+0000") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step011\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}

	$iso8601 = libcore__unixmicrotime_to_iso8601('aaa', 'bbb', false);
	if (strcmp($iso8601, "1970-01-01 00:00:00.000000") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step012\n";
		echo "iso8601:".$iso8601."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();


//	$stop = libcore__get_unixmicrotime();
//	$rc = libcore__unixmicrointerval_to_text($stop - $start);
//	if ($rc->is_ok() === false)
//	{
//		echo "ERROR[".$__FUNCTION__."()]: libcore__unixmicrointerval_to_text is broken\n";
//		exit(1);
//	}
//	echo $__FUNCTION__."(): ".($rc->get_value())."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/*
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// test libcore__iso8601_to_unixmicrotime()
(function()
{
	$__FUNCTION__='libcore__iso8601_to_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$test_list =
	[
		[ 'in'=> '',                                 'out'=> '',                 'flag_invalid'=> true  ],

		[ 'in'=> '20050809',                         'out'=> '1123545600000000', 'flag_invalid'=> false ], // 9 августа 2005 года

		[ 'in'=> '20050809T183142',                  'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '20050809T183142.1',                'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '20050809T183142.21',               'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '20050809T183142.321',              'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '20050809T183142.4321',             'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '20050809T183142.54321',            'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '20050809T183142.654321',           'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '20050809T183142+03',               'out'=> '1123601502000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'in'=> '20050809T183142.1+03',             'out'=> '1123601502000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.21+03',            'out'=> '1123601502000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.321+03',           'out'=> '1123601502000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.4321+03',          'out'=> '1123601502004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.54321+03',         'out'=> '1123601502054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'in'=> '20050809T183142.654321+03',        'out'=> '1123601502654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'in'=> '20050809T183142+0330',             'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.1+0330',           'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.21+0330',          'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.321+0330',         'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.4321+0330',        'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.54321+0330',       'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.654321+0330',      'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '20050809T183142+03:30',            'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.1+03:30',          'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.21+03:30',         'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.321+03:30',        'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.4321+03:30',       'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.54321+03:30',      'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '20050809T183142.654321+03:30',     'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '20050809T183142-03',               'out'=> '1123623102000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'in'=> '20050809T183142.1-03',             'out'=> '1123623102000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.21-03',            'out'=> '1123623102000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.321-03',           'out'=> '1123623102000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.4321-03',          'out'=> '1123623102004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.54321-03',         'out'=> '1123623102054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'in'=> '20050809T183142.654321-03',        'out'=> '1123623102654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'in'=> '20050809T183142-0330',             'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.1-0330',           'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.21-0330',          'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.321-0330',         'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.4321-0330',        'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.54321-0330',       'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.654321-0330',      'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '20050809T183142-03:30',            'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.1-03:30',          'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.21-03:30',         'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.321-03:30',        'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.4321-03:30',       'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.54321-03:30',      'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '20050809T183142.654321-03:30',     'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09',                       'out'=> '1123545600000000', 'flag_invalid'=> false ], // 9 августа 2005 года

		[ 'in'=> '2005-08-09T18:31:42',              'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '2005-08-09T18:31:42.1',            'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.21',           'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.321',          'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.4321',         'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.54321',        'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '2005-08-09T18:31:42.654321',       'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '2005-08-09T18:31:42+03',           'out'=> '1123601502000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.1+03',         'out'=> '1123601502000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.21+03',        'out'=> '1123601502000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.321+03',       'out'=> '1123601502000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.4321+03',      'out'=> '1123601502004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.54321+03',     'out'=> '1123601502054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09T18:31:42.654321+03',    'out'=> '1123601502654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'in'=> '2005-08-09T18:31:42+0330',         'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1+0330',       'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21+0330',      'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321+0330',     'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321+0330',    'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321+0330',   'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321+0330',  'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09T18:31:42+03:30',        'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1+03:30',      'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21+03:30',     'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321+03:30',    'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321+03:30',   'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321+03:30',  'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321+03:30', 'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09T18:31:42-03',           'out'=> '1123623102000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.1-03',         'out'=> '1123623102000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.21-03',        'out'=> '1123623102000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.321-03',       'out'=> '1123623102000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.4321-03',      'out'=> '1123623102004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.54321-03',     'out'=> '1123623102054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09T18:31:42.654321-03',    'out'=> '1123623102654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'in'=> '2005-08-09T18:31:42-0330',         'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1-0330',       'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21-0330',      'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321-0330',     'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321-0330',    'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321-0330',   'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321-0330',  'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09T18:31:42-03:30',        'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.1-03:30',      'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.21-03:30',     'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.321-03:30',    'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.4321-03:30',   'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.54321-03:30',  'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09T18:31:42.654321-03:30', 'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42',              'out'=> '1123612302000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'in'=> '2005-08-09 18:31:42.1',            'out'=> '1123612302000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.21',           'out'=> '1123612302000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.321',          'out'=> '1123612302000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.4321',         'out'=> '1123612302004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.54321',        'out'=> '1123612302054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'in'=> '2005-08-09 18:31:42.654321',       'out'=> '1123612302654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'in'=> '2005-08-09 18:31:42+03',           'out'=> '1123601502000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.1+03',         'out'=> '1123601502000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.21+03',        'out'=> '1123601502000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.321+03',       'out'=> '1123601502000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.4321+03',      'out'=> '1123601502004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.54321+03',     'out'=> '1123601502054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'in'=> '2005-08-09 18:31:42.654321+03',    'out'=> '1123601502654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'in'=> '2005-08-09 18:31:42+0330',         'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1+0330',       'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21+0330',      'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321+0330',     'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321+0330',    'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321+0330',   'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321+0330',  'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42+03:30',        'out'=> '1123599702000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1+03:30',      'out'=> '1123599702000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21+03:30',     'out'=> '1123599702000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321+03:30',    'out'=> '1123599702000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321+03:30',   'out'=> '1123599702004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321+03:30',  'out'=> '1123599702054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321+03:30', 'out'=> '1123599702654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42-03',           'out'=> '1123623102000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.1-03',         'out'=> '1123623102000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.21-03',        'out'=> '1123623102000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.321-03',       'out'=> '1123623102000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.4321-03',      'out'=> '1123623102004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.54321-03',     'out'=> '1123623102054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'in'=> '2005-08-09 18:31:42.654321-03',    'out'=> '1123623102654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'in'=> '2005-08-09 18:31:42-0330',         'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1-0330',       'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21-0330',      'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321-0330',     'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321-0330',    'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321-0330',   'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321-0330',  'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'in'=> '2005-08-09 18:31:42-03:30',        'out'=> '1123624902000000', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.1-03:30',      'out'=> '1123624902000001', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.21-03:30',     'out'=> '1123624902000021', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.321-03:30',    'out'=> '1123624902000321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.4321-03:30',   'out'=> '1123624902004321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.54321-03:30',  'out'=> '1123624902054321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'in'=> '2005-08-09 18:31:42.654321-03:30', 'out'=> '1123624902654321', 'flag_invalid'=> false ], // 9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут
	];
	$test_list_size = count($test_list);


	for ($i=0; $i < $test_list_size; $i++)
	{
		$in           = $test_list[$i]['in'];
		$out          = $test_list[$i]['out'];
		$flag_invalid = $test_list[$i]['flag_invalid'];

		$rc = libcore__iso8601_to_unixmicrotime($in);

		if ($flag_invalid === false)
		{
			if ($rc === false)
			{
				echo "ERROR[".$__FUNCTION__."()]: step001\n";
				exit(1);
			}
		}

		if (strcmp($rc, $out) !== 0)
		{
			echo "ERROR[".$__FUNCTION__."()]: step002\n";
			exit(1);
		}
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
*/
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixmicrotime_to_unixtime()
 */
(function()
{
	$__FUNCTION__='libcore__unixmicrotime_to_unixtime';
	$start = libcore__get_unixmicrotime();


	$unixtime = libcore__unixmicrotime_to_unixtime('1528799349000000');
	if (strcmp($unixtime, "1528799349") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		echo "unixtime:".$unixtime."\n";
		exit(1);
	}

	$unixtime = libcore__unixmicrotime_to_unixtime('1528799349');
	if ($unixtime !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "unixtime:".$unixtime."\n";
		exit(1);
	}

	$unixtime = libcore__unixtime_to_unixmicrotime('');
	if ($unixtime !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		echo "unixtime:".$unixtime."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * test libcore__unixtime_to_unixmicrotime()
 */
(function()
{
	$__FUNCTION__='libcore__unixtime_to_unixmicrotime';
	$start = libcore__get_unixmicrotime();


	$unixmicrotime = libcore__unixtime_to_unixmicrotime('1528799349');
	if (strcmp($unixmicrotime, "1528799349000000") !== 0)
	{
		echo "ERROR[".$__FUNCTION__."()]: step001\n";
		echo "unixmicrotime:".$unixmicrotime."\n";
		exit(1);
	}

	$unixmicrotime = libcore__unixtime_to_unixmicrotime('1528799349000000');
	if ($unixmicrotime !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step002\n";
		echo "unixmicrotime:".$unixmicrotime."\n";
		exit(1);
	}

	$unixmicrotime = libcore__unixtime_to_unixmicrotime('');
	if ($unixmicrotime !== false)
	{
		echo "ERROR[".$__FUNCTION__."()]: step003\n";
		echo "unixmicrotime:".$unixmicrotime."\n";
		exit(1);
	}


	$stop = libcore__get_unixmicrotime();
	echo $__FUNCTION__."(): ".($stop - $start)."\n"; flush();
})();
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
echo "ok, test passed\n";
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
?>