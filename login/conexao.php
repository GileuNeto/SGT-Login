<?php

$usuario = 'root';
$senha = '';
$database = 'bdloginsgt';
$host = 'localhost';

$mysqli = new mysqli("localhost", "root", "", "bdloginsgt");

if($mysqli->error) {
    die('Falha ao conectar com bd' . $mysqli->error);
}