<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SQL INJECTION</title>
</head>
<body>
    <pre><i><h3>SQL injection - example</h3></i></pre>
    <hr>
    <?php
    if (isset($request)) {
        echo "<pre><b>QUERY : </b>" . $request . "</pre><hr>";
    }
    ?>
    <pre><b>FORM:</b></pre>
    <form action="./index.php" method="get">
        <input type="text" name="email" placeholder="Enter email">
        <input type="text" name="password" placeholder="Enter password">
        <input type="checkbox" name="secure">
        <input type="submit">
    </form>
    <hr>
    <pre><b>RESPONSE:</b></pre>
    <?php
    if (isset($users)) {
        if (count($users) > 0) {
            foreach ($users as $user) {
                echo "<pre>" . $user["email"] . " - " . $user["password"] . "<pre/>";
            }
        } else {
            echo "<pre>response empty</pre>";
        }
    } else {
        echo "<pre>connection needed</pre>";
    }
    ?>
</body>
</html>