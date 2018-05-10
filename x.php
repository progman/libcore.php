<?php
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
require_once("libcore.php");

/*
$rc = libcore__file_get("/tmp/x.php");
if ($rc === false)
{
	echo "error libcore__file_get()\n";
	exit(1);
}
$body = $rc;


$rc = libcore__file_set("/tmp/z.tmp", $body);
if ($rc === false)
{
	echo "error libcore__file_set()\n";
	exit(1);
}


$rc = @rename("/tmp/10/z.tmp", "/tmp/10/z");
if ($rc === false)
{
	echo "error rename()\n";
	exit(1);
}


echo "ok\n";
*/


$rc = libcore__file_copy("/tmp/x.php", "/tmp/10/z", true);
if ($rc === false)
{
	echo "error libcore__file_copy()\n";
	exit(1);
}


echo "ok\n";
