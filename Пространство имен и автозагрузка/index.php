<?php

spl_autoload_register();


echo "<h3>Задание 1</h3>";
$coreController = new \App\Core\Controller();
$projectController = new \App\Project\Controller();

echo "<h3>Задание 2 и 3</h3>";
$cartClass1 = new \App\Modules\Cart\Class1();
$shopCartClass1 = new \App\Modules\Shop\Cart\Class1();

echo "<h3>Задание 4</h3>";
$user = new \App\Core\User();
$adminController = new \App\Core\Admin\Controller();
$userData = new \App\Project\User\Data('user');

echo "<h3>Задание 5 и 6</h3>";
$test = new \App\Project\Test();






