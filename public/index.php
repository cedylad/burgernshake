<?php
require '../app/Autoloader.php';
App\Autoloader::register();
 
if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

//Initialisation des objets
$db = new App\DataBase('burgernshake');

ob_start();

if($p === 'home'){
    require '../page/home.php';
} else if ($p === 'burger'){
    require'../page/burgers.php';
}

$content = ob_get_clean();
require '../page/template/default.php';