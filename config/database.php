<?php
$host = 'localhost';
$dbname = 'rpg_hub';
$usuario = 'root';
$senha = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $usuario, $senha);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("A fita de contenção rompeu. Erro no Banco: " . $e->getMessage());
}