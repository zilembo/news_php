<?php
require_once __DIR__ . '/autoload.php';
$AddN = new AdminController;
$AddN->actionAdd();
include __DIR__ . '/views/add.php';
?>