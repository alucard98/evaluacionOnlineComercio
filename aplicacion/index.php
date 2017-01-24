<?php

session_start();
require 'vendor/autoload.php';
$app = new \Slim\Slim();



$app->config(array(
    'debug' => true,
    'templates.path' => 'views',
));

$app->get('/', function() {
    echo '<a href="usuarios" class="btn btn-primary">Listado de Usuarios</a>';
});

$app->get('/usuarios', function() use ($app) {
    $url = "http://localhost/slimtest/base/employees.json";
    $feed = json_decode(file_get_contents($url), true);
    $data['usuarios'] = $feed;
    $app->render('usuarios.php', $data);
})->name('usuarios');

$app->get('/nuevo/usuario', function () use($app) {
    $app->render('nuevo.php');
});


$app->get('/editar/:id/usuario', function($id ) use($app) {
    $url = "http://localhost/slimtest/base/employees.json";
    $feed = json_decode(file_get_contents($url), true);
    $data['usuarios'] = $feed;
    $id = $id;
    //echo $id;

    for ($x = 0; $x <= count($data['usuarios']); $x++) {
        if ($data['usuarios'][$x]['id'] == $id) {
            
            $app->render('editar.php', $data['usuarios'][$x]);
            exit();
        }
    }
    
    if (!$result) {
        $app->halt(404, 'Usuario no encontrado');
    }
})->name('editarUsuario');


$app->run();

