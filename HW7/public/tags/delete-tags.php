<?php

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../../config/database.php';

use Test\HW7\Source\Models\Tag;

if (!count($_GET)==0) {
    $tag=Tag::find($_GET['id']);
    $tag->delete();
    header('Location: list-tags.php');
}