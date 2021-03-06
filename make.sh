#!/bin/bash
#---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------#
function do_it()
{
# create temp dir and files
	local LOCAL_TMPDIR="/tmp";
	if [ "${TMPDIR}" != "" ] && [ -d "${TMPDIR}" ];
	then
		LOCAL_TMPDIR="${TMPDIR}";
	fi

	local TMP1;
	TMP1="$(mktemp --tmpdir="${LOCAL_TMPDIR}" 2> /dev/null)";
	if [ "${?}" != "0" ];
	then
		echo "can't make tmp file";
		return 1;
	fi



	find ./src/ -type f | grep -v '/head.php' | grep -v '/result_t.php' | grep -v '/test.php' | grep -v '/test_head.php' | grep -v '/test_tail.php' | sort > "${TMP1}";

	echo "<?php" > libcore.php

	cat src/head.php >> libcore.php;
	cat src/result_t.php >> libcore.php;

	while read -r LINE;
	do

		cat "${LINE}" >> libcore.php;

	done < "${TMP1}";

	echo -n "?>" >> libcore.php



	find ./src/ -type f | grep 'test.php' | sort > "${TMP1}";

	echo "<?php" > test.php
	cat src/head.php >> test.php;
	cat src/test_head.php >> test.php;

	while read -r LINE;
	do

		cat "${LINE}" >> test.php;

	done < "${TMP1}";

	cat src/test_tail.php >> test.php;
	echo -n "?>" >> test.php



	rm -rf -- "${TMP1}" &> /dev/null;



	return 0;
}
#---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------#
do_it;
#---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------#
