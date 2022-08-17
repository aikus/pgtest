<?php
$dsn = "pgsql:host=pgdb;port=5432;dbname=test;";
$pdo = new PDO($dsn, 'postgres', 'example', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$rows = $pdo->prepare("SELECT * FROM test_jsonb");
$rows->execute();
var_dump($rows->fetchAll());