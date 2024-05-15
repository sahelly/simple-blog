<?php
require_once 'functions/pdo_connection.php';
global $pdo;
$query = "SELECT name, id FROM categories;";
$statement = $pdo->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();

?>

<div class="container">
    <!-- Begin Logo -->
    <a class="navbar-brand" href="#">
        simple blog
    </a>
    <!-- End Logo -->
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!-- Begin Menu -->
        <ul class="navbar-nav ml-auto">

            <?php foreach ($categories as $category): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= url('category.php?cat_id=' . $category->id) ?>"><?= $category->name ?></a>
            </li>
            <?php endforeach ?>

        </ul>
        <!-- End Menu -->

    </div>
</div>
