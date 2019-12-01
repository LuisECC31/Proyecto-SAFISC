<?php


class routes {
	const routes="/PROYECTO-SAFISC";
}

$controllers = array(
    'Home' => ['index'],
    'Docente' => ['index', 'add', 'save'],
    'Administrativo' => ['index'],
    'Login' => ['index']
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
        case 'Docente':

            $controller = new DocenteController();
            break;
        case 'Administrativo':
            $controller = new AdministrativoController();
            break;
        case 'Login':
            $controller = new LoginController();

        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>