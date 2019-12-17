<?php

$controllers = array(
    'Home' => ['index'],
    'Login' => ['index','login'],
    'Secretaria' => ['index'],
    'Mantenimiento' => ['index'],
    'Reporte'=> ['index','index2','index3','index4','index5','index6','index7','index8','index9','reporte','reporte2','eliminar','Anadirdano','Anadirubicacion'],
    'Reportemantenimiento'=> ['index2','index3','index4','index5','index6','reporte','eliminar','actualizar'],
    'Usuario'=> ['index','index2','mostrar','add','eliminar'],
    'Logout'=> ['logout']
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
        case 'Mantenimiento':
            $controller = new MantenimientoController();
            break;
        case 'Reporte':
            $controller = new ReporteController();
            break;
        case 'Reportemantenimiento':
            $controller = new ReportemantenimientoController();
            break;
        case 'Usuario':
            $controller = new UsuarioController();
            break;
        case 'Logout':
            $controller = new LogoutController();
            break;


        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>