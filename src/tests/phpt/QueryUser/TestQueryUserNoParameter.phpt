--TEST--
QueryUser - query user has no parameter

--SKIPIF--
<?php include('skip_enterprise.inc'); ?>
--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("QueryUser", "testQueryUserNoParameter");
--EXPECT--
ERR_PARAM
