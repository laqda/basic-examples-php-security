<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSS</title>
</head>
<body>
    <pre><i><h3>XSS - example</h3></i></pre>
    <hr>
    <pre><b>FORM:</b></pre>
    <form action="./index.php" method="get">
        <input type="text" name="input" placeholder="Enter value">
        <input type="submit">
    </form>
    <hr>
    <?php
    if (isset($display) && isset($display_secure) && isset($input_value)) {
        echo "<pre><b>* INPUT VALUE:</b><br><br>" . $input_value . "<br><br><b>* DISPLAY:</b><br><br>NOT SECURE : " . $display . "<br>SECURE : " . $display_secure . "</pre>";
    }
    ?>
</body>
</html>