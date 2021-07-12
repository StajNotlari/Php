<?php
if(substr($wanted_page, 0, 1) == '/')
    $wanted_page = substr ($wanted_page, 1);

$segments = explode('/', $wanted_page);
require 'config/route.php';

$controller = NULL;

if(isset($routing[$segments[0]]))
    $controller = $routing[$segments[0]];
else if($segments != [""])
    $controller = $segments[0];
else
    $controller = 'Home';

require 'controllers/'.$controller.'.php';

$controller = 'rifatMVC\\'.$controller;

array_shift($segments);

$controller_object = new $controller();
$controller_object->do_requested($segments);