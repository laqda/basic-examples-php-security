<?php
session_start();
if (isset($_SESSION["id"]) && $_SESSION["id"] === 1) {
    try {
        $PDO = new PDO("mysql:host=localhost;dbname=example_csrf", "root", "");
        $PDO->query("DELETE FROM users");
        $PDO = null;
        echo "Delete all users done.";
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
} else {
    echo "Permission denied";
}