#!/usr/bin/php
<?php

include '../phplib/api.php';

$ot = new otulea("../data");
if($argc < 2)
  die("usage: ./lsTests [id] [test]" . PHP_EOL);
$ot->set_user($argv[1]);
$timestamp = $argc < 3 ? "" : $argv[2];
$tests = $ot->get_tests($timestamp);
otulea::print_testarray($tests);
