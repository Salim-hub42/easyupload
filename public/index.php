<?php

require_once '../vendor/autoload.php';

include_once '../src/dotEnv.php';
include_once '../src/log.php';

dotEnv(__DIR__ . '/../');

$title = $_ENV['MAIL_FROM_NAME'];
include_once '../src/_header.php';


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($uri) {
    case '/':
        include_once '../src/accueil.php';
        break;

    case '/upload':
        require __DIR__ . '/../src/upload.php';
        break;
    case '/login':
        require __DIR__ . '/../src/pageLogin.html';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../src/404.php';
        break;
}









include_once '../src/_footer.php';
