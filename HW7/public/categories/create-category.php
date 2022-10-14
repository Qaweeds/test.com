<?php

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../../config/database.php';

use Test\HW7\Source\Models\Category;

if (!count($_POST)==0) {
    $category = new Category();
    $category->title=$_POST['title'];
    $category->slug=$_POST['slug'];
    $category->save();
    header('Location: list-categories.php');
}
/** @var $blade */
echo $blade->make('categories/create-category')->render();