<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/blade.php';
require_once __DIR__.'/../config/database.php';

use Test\HW7\Source\Models\Category;
use Test\HW7\Source\Models\Post;
use Test\HW7\Source\Models\Tag;

////1
//Category::factory(5);

////2
//$category = Category::query()->inRandomOrder()->first();
//$category->title = \Illuminate\Support\Str::random('10');
//$category->slug = \Illuminate\Support\Str::slug($category->title);
//$category->save();

////3
//Category::query()->inRandomOrder()->first()->delete();

////4
//Post::factory(10);

////5
//$post = Post::query()->inRandomOrder()->first();
//$categoryId = Category::query()->where('id', '!=', $post->category_id)->inRandomOrder()->first()->id;

//$post->category_id = $categoryId;
//$post->title = \Illuminate\Support\Str::random('20');
//$post->slug = \Illuminate\Support\Str::slug($post->title);
//$post->body = \Illuminate\Support\Str::random('100');
//$post->save();

////6
//Post::query()->inRandomOrder()->first()->delete();

////7
//Tag::factory(10);

////8
Post::addTagsToAllPosts();


/** @var $blade */
echo $blade->make('index')->render();