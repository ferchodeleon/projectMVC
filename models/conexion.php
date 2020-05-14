<?php

  class Conectar{

    public static function conecta() {
      // $conecta = new mysqli("localhost", "root", "", "ejemplomvc");
      $conecta = new mysqli("remotemysql.com:3306", "sMTJoiJ0p1", "jU4YYjF3ws", "sMTJoiJ0p1");
      $conecta -> query("SET NAMES'utf-8'"); //sirve para trabajar los caracteres expeciales
      return $conecta;
    }
}