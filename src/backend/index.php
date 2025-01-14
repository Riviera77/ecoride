<?php

// require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
// require '../config/database.php';

try {

    $config = include_once 'config/database.php';
    $pdo = new PDO($config['dsn'], $config['username'], $config['password'], $config['options']);
    echo json_encode(['message' => 'Connexion réussie']);
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
echo "Bienvenue sur le backend d'ECORIDE";