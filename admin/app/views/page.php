<?php
    require '../model/cPonto.php';

    $cponto = new cPonto();

    $cponto->render_page("Exemplo", 0, '<h2>Kiss my ass</h2>');
?>