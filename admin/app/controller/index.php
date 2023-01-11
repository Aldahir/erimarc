<?php
    require '../model/Conexao.php';
    require '../model/cPonto.php';
    require '../model/Usuario.php';
    $conexao = new Conexao();
    $usuario = new Usuario($conexao->getConnection());
    $cponto = new cPonto($conexao->getConnection());

    switch ($_REQUEST['role']) {
        case 'newpart':
            var_dump($cponto->ler_todos());
            break;

        case 'getUsers':
            $usuario->ler_todos();
            break;

        case 'generatePreview':
            $html = "<h2>Kiss my ass</h2>";
            $cponto->setTitulo("Aldair");
            $cponto->setConteudo($html);
            $res = $cponto->render_page(0,0) == true ? json_encode(["message"=>"Gerado com sucesso"]) : json_encode(["message"=>"Erro no funcionamento"]);
            print_r($res);
            break;
        
        default:
            http_response_code(404);
            require '../views/404.php';
            break;
    }