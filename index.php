<?php


require_once __DIR__ . '/autoload.php';

echo $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);

//$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
//$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) : 'News';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'All';

$controllerClassName = $ctrl . 'Controller';

$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();
