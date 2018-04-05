<?php
if (isset($_GET["input"])) {
    $input_value = htmlspecialchars($_GET["input"]);
    $display = $_GET["input"];
    $display_secure = strip_tags($_GET["input"]);
}

require "view.php";