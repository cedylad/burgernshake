<?php
$burger = \App\App::getDb()->prepare('SELECT * FROM burger WHERE id_burger=?', [$_GET['id']], 'App\Table\Burger', true);
\App\App::setTitle($burger->name_burger);
?>

<h1><?= $burger->name_burger;?></h1>
<p><?= $burger->component_burger;?></p>

