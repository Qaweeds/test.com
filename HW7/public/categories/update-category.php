<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../config/blade.php';
require_once __DIR__ . '/../../config/database.php';

use Test\HW7\Source\Models\Category;

if (count($_GET) >= 1 && !empty($_POST)) {
    $category = Category::find($_GET['id']);
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location: list-categories.php');
} elseif (count($_GET) >= 1 && count($_POST) == 0) {
    $category = Category::find($_GET['id']);
}

$categoryInfo['id'] = $category->id;
$categoryInfo['title'] = $category->title;
$categoryInfo['slug'] = $category->slug;

/** @var $blade */
echo $blade->make('categories/update-category', ['categoryInfo' => $categoryInfo])->render();