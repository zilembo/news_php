<?php
require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';

$controller = new $controllerClassName;
$method = 'action' . $act;
var_dump($method);
$controller->$method();
?>