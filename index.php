<?php

require_once "Routing.php";

$path = parse_url($_SERVER['REQUEST_URI']);
$path = trim($path['path'], '/');

Routing::run($path);
?>
