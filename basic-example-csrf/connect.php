<?php
session_start();
if (isset($_GET["email"]) && isset($_GET["password"])) {
    if ($_GET["email"] === "test@test.com" && $_GET["password"] === "secret") {
        $_SESSION["id"] = 1;
        echo "<p>Welcome admin!</p>";
        echo "<a href='index.php'>Go back to index.php</a>";
    }
}