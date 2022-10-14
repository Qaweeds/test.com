<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/blade.php';

use Test\HW7\Source\Models\Category;
use Test\HW7\Source\Models\Post;
use Test\HW7\Source\Models\Tag;

/** @var $blade */
echo $blade->make('index')->render();