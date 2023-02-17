<?php
App\App::getTitle();
?>
<ul>
    <?php foreach(App\App::getDb()->query('SELECT * FROM burger', 'App\Table\Burger') as $burger): ?>
    <h2>
        <a href="<?= $burger->url;?>"><?= $burger->name_burger;?></a>
    </h2>
    <p><?=$burger->DescriptionBurger; ?></p>

    <?php endforeach; ?>
</ul>