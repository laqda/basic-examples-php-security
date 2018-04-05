<?php
session_start();
try {
    $PDO = new PDO("mysql:host=localhost;dbname=example_csrf", "root", "");
    $users = $PDO->query("SELECT * from users")->fetchAll();
    $PDO = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
require "view.php";