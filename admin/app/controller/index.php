<?php

    namespace app\controller;
    use app\model\cPonto;

    switch ($_SERVER['REQUEST_URI']) {
        case '/newpart':
            cPonto::save();
            break;
        
        default:
            http_response_code(404);
            require __DIR__ . 'app/views/404.php';
            break;
    }