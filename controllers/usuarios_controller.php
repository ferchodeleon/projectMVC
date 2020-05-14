<?php

//Aquì van las consultas de cada una de las tablas
//lamada del modelo, modelado para crear la vista

require_once "models/usuarios_model.php";
$user = new usuarios_model();
$datos = $user -> get_usuarios();

//Llamada a la vista
require_once "views/usuarios_views.php";