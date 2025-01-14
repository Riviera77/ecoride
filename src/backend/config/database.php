<?php
$host = 'localhost'; // Adresse du serveur (Docker ou local)
$db = 'ecoride'; // Nom de la base de données
$user = 'root'; // Utilisateur par défaut
$pass = 'root'; // Mot de passe par défaut

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Active les erreurs PDO
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage()); // Arrête le script si la connexion échoue
}