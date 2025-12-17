<?php
include "config.php";
include "class/Database.php";
include "class/Form.php";

session_start();

// Routing
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/artikel/index';
$segments = explode('/', trim($path, '/'));

$module = $segments[0] ?? 'artikel';
$action = $segments[1] ?? 'index';
$param  = $segments[2] ?? null;

$module_file = "module/$module/$action.php";

include "template/header.php";

if (file_exists($module_file)) {

    $db = new Database();

    if ($param !== null) {
        $_GET['id'] = $param;
    }

    include $module_file;

} else {

    echo "<h3>Modul tidak ditemukan: {$module}/{$action}</h3>";
}

include "template/footer.php";
