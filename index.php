<?php

    include './app/Controller/ClienteController.php';

    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($url)
    {
        case '/':
            ClienteController::index();
        break;

        case '/editar':
            ClienteController::editar();
        break;

        case '/salvar':
            ClienteController::salvar();
        break;
        case '/delete':
            ClienteController::delete();
        break;

        default:
            echo "Erro 404";
        break;
    }

?>