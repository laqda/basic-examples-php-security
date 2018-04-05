<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon application</title>
</head>
<body>
    <h3>Mon super site web pas très bien protégé</h3>
    <?php
    if (isset($_SESSION["id"]) && $_SESSION["id"] === 1) {
        echo "<h4 style='color: red'>You are connected as admin</h4>";
    }
    ?>
    <form method="get" action="connect.php">
        <input type="text" name="email" placeholder="Enter email">
        <input type="text" name="password" placeholder="Enter password">
        <input type="submit" value="Connection">
    </form>
    <h4>Liste des membres:</h4>
    <?php
    if (isset($users) && count($users) > 0) {
        $i = 1;
        foreach ($users as $user) {
            echo "<pre>" . $i . " - " . $user["name"] . "</pre>";
            $i++;
        }
    } else {
        echo "<pre>Table empty</pre>";
    }
    ?>
</body>
</html>