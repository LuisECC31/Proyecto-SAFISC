<?php

$controllers = array(
    'Home' => ['index'],
    'Login' => ['index','login'],
    'Reporte'=> ['index','reporte']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Home', 'index');
    }
} else {
    call('Home', 'index');
}

function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Home':
            $controller = new HomeController();
            break;
        case 'Login':
            $controller = new LoginController();
            break;
        case 'Reporte':
            $controller = new ReporteController();
            break;

        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>