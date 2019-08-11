<?php

require '../bootstrap.php';


$app->get('/',function(){

    echo "<a href='/somar'>Método Somar</a><br/>";
    echo "<a href='/listar'>Método Lista Estados</a>";

});

$app->post('/somar','app\controller\MathController:somar');
$app->post('/listar','app\controller\EstadosController:listar');


$app->run();