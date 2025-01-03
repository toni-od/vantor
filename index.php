<?php

$path = $_SERVER["REQUEST_URI"];
echo $path . "<br>";

if($path == "/core") {
    include_once __DIR__ . "/web/index.php";
} else if($path == "/") {
    include_once __DIR__ . "/core/index.php";
} else {
    echo "<h1>404, Page not found!</h1>";
}
