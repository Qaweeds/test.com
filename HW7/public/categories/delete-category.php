<?php

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../../config/database.php';

use Test\HW7\Source\Models\Category;

if (!empty($_POST)) {
    $category=Category::find($_GET['id']);
    $category->delete();
    header('Location: list-categories.php');
}