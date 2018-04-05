<?php
function getUserByEmail($email, $password, $secure = false) {
    try {
        $PDO = new PDO("mysql:host=localhost;dbname=sql_injection", "root", "");
        if ($secure) {
            $sql = "SELECT * from users WHERE email=:email AND password=:password";
            $request = $PDO->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
            $request->execute([':email' => $email, ':password' => $password]);
            return [$sql, $request->fetchAll()];
        } else {
            $request = "SELECT * from users WHERE (email='" . $email . "') AND (password='" . $password . "')";
            return [$request, $PDO->query($request)->fetchAll()];
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

if (isset($_GET["email"]) && isset($_GET["password"])) {
    // RECEIVE REQUEST GET
    if (isset($_GET["secure"]) && $_GET["secure"] === "on") {
        $answer = getUserByEmail($_GET["email"], $_GET["password"], true);
    } else {
        $answer = getUserByEmail($_GET["email"], $_GET["password"], false);
    }
    $request = $answer[0];
    $users = $answer[1];
}
require "view.php";
