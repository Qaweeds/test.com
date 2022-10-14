<?php

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../../config/database.php';

use Test\HW7\Source\Models\Category;

$posts = Category::all();

/** @var $blade */
echo $blade->make('categories/list-categories', compact('posts'))->render();