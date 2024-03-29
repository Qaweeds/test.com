<?php

require_once __DIR__.'/../../vendor/autoload.php';
require_once __DIR__.'/../../config/blade.php';
require_once __DIR__.'/../../config/database.php';

use Test\HW7\Source\Models\Tag;

$posts = Tag::all();

/** @var $blade */
echo $blade->make('tags/list-tags', compact('posts'))->render();