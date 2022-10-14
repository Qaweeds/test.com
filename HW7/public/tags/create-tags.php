<?php

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../../config/database.php';

use Test\HW7\Source\Models\Tag;

if (!count($_POST)==0) {
    $tag = new Tag();
    $tag->title=$_POST['title'];
    $tag->slug=$_POST['slug'];
    $tag->save();
    header('Location: list-tags.php');
}
/** @var $blade */
echo $blade->make('tags/create-tags')->render();

