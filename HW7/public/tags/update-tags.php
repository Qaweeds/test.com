<?php

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../../config/database.php';

use Test\HW7\Source\Models\Tag;

if (count($_GET)>=1 && !empty($_POST)) {
    $tag=Tag::find($_GET['id']);
    $tag->title=$_POST['title'];
    $tag->slug=$_POST['slug'];
    $tag->save();
    header('Location: list-tags.php');
} elseif (count($_GET)>=1 && count($_POST)==0) {
    $tag=Tag::find($_GET['id']);
}

$tagInfo['id']=$tag->id;
$tagInfo['title']=$tag->title;
$tagInfo['slug']=$tag->slug;

/** @var $blade */
echo $blade->make('tags/update-tags', ['tagInfo' => $tagInfo])->render();