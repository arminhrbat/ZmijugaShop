<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

require_once("rest/dao/ZmijugaDao.class.php");

$dao = new ZmijugaDao();
$results = $dao->get_all();
print_r($results);


?>
