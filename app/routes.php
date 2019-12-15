<?php

$controllers = array(
    'Home' => ['index'],
    'Login' => ['index','login'],
    'Secretaria' => ['index'],
    'Reporte'=> ['index','index2','reporte'],
    'Usuario'=> ['index','index2','mostrar','add']
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
        case 'Secretaria':
            $controller = new SecretariaController();
            break;
        case 'Reporte':
            $controller = new ReporteController();
            break;
        case 'Usuario':
            $controller = new UsuarioController();
            break;

        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>