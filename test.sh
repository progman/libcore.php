#!/bin/bash

./make.sh;

php -f test.php;
STATUS=${?};
exit ${STATUS};
