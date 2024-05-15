<?php
// conexcion a base de datos 
function conectar_db(){
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $db = 'CRUD';
    $conn = new mysqli($servidor,$usuario,$password,$db);
    return $conn;
}
