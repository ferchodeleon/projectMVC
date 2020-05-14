<?php

include_once "conexion.php";  //incluye la clase ya que esta en la misma carpeta

class usuarios_model {

  private $db; //Variable para conexión de base de datos
  private $usuarios; //trabaja los usuarios


  public function __construct() { //Función constructora
    $this -> db = Conectar::conecta(); //Asigno la conexión de la clase conexion.php
    $this -> usuarios = array(); //Asigno un array para traer todos los datos
  }

  public function get_usuarios(){ //Consulta de los usuarios
    $consulta = $this -> db -> query("SELECT * FROM personas;"); //realizo el query
    while($filas = $consulta -> fetch_assoc()){ //ciclo para realizar la consulta
      $this -> usuarios[] = $filas; // Asigno el array a los valores
    }

    return $this -> usuarios; //Retorna los usuarios consultados
  }
}