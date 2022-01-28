--TEST--
Serializer: invalid pattern.
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--INI--
apc.enabled=1
apc.enable_cli=1
apc.serializer=igbinary
--FILE--
<?php
--EXPECT--
Warning: PHP Startup: apc_find_serializer: serializer "igbinary" does not registered. in Unknown on line 0

Warning: Unknown: apc_find_serializer: serializer "igbinary" does not registered. in Unknown on line 0
