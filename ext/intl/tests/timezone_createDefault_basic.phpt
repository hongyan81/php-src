--TEST--
IntlTimeZone::createDefault(): basic test
--SKIPIF--
<?php
if (!extension_loaded('intl'))
	die('skip intl extension not enabled');
--FILE--
<?php
ini_set("intl.error_level", E_WARNING);
$tz = IntlTimeZone::createDefault();
print_r($tz);
$tz = intltz_create_default();
print_r($tz);
?>
==DONE==
--EXPECTF--
IntlTimeZone Object
(
    [valid] => 1
    [id] => %s
    [rawOffset] => %d
    [currentOffset] => %d
)
IntlTimeZone Object
(
    [valid] => 1
    [id] => %s
    [rawOffset] => %d
    [currentOffset] => %d
)
==DONE==