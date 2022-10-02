<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../config/database.php';

use Test\HW6\Source\Models\Category;
use Test\HW6\Source\Models\Post;
use Test\HW6\Source\Models\Tag;

//1. Створити 5 категорій (insert)
/*
$category = new Category();
$category->title='title 1';
$category->slug='slug 1';
$category->save();

$category = new Category();
$category->title='title 2';
$category->slug='slug 2';
$category->save();

$category = new Category();
$category->title='title 3';
$category->slug='slug 3';
$category->save();

$category = new Category();
$category->title='title 4';
$category->slug='slug 4';
$category->save();

$category = new Category();
$category->title='title 5';
$category->slug='slug 5';
$category->save();
*/

//2. Змінити 1 категорію (update)
/*
$category=Category::find(1);
$category->title='title 6';
$category->slug='slug 6';
$category->save();
*/

//3. Видалити 1 категорію (delete)
/*
$category=Category::find(3);
$category->delete();
*/

//4. Створити 10 постів, прикріпивши довільну категорію
/*
$category=Category::find(1);
$post = new Post();
$post->title='title 1';
$post->slug='slug 1';
$post->body='body 1';
$post->category_id = $category->id;
$post->save();

$post = new Post();
$post->title='title 2';
$post->slug='slug 2';
$post->body='body 2';
$post->category_id = $category->id;
$post->save();

$post = new Post();
$post->title='title 3';
$post->slug='slug 3';
$post->body='body 3';
$post->category_id = $category->id;
$post->save();

$category=Category::find(2);
$post = new Post();
$post->title='title 4';
$post->slug='slug 4';
$post->body='body 4';
$post->category_id = $category->id;
$post->save();

$post = new Post();
$post->title='title 5';
$post->slug='slug 5';
$post->body='body 5';
$post->category_id = $category->id;
$post->save();

$category=Category::find(4);
$post = new Post();
$post->title='title 6';
$post->slug='slug 6';
$post->body='body 6';
$post->category_id = $category->id;
$post->save();

$post = new Post();
$post->title='title 7';
$post->slug='slug 7';
$post->body='body 7';
$post->category_id = $category->id;
$post->save();

$post = new Post();
$post->title='title 8';
$post->slug='slug 8';
$post->body='body 8';
$post->category_id = $category->id;
$post->save();

$category=Category::find(5);
$post = new Post();
$post->title='title 9';
$post->slug='slug 9';
$post->body='body 9';
$post->category_id = $category->id;
$post->save();

$post = new Post();
$post->title='title 10';
$post->slug='slug 10';
$post->body='body 10';
$post->category_id = $category->id;
$post->save();
*/

//5. Оновити 1 пост, замінивши поля + категорію
/*
$post=Post::find(7);
$post->title='title 11';
$post->slug='slug 11';
$post->body='body 11';
$post->category_id = 5;
$post->save();
*/

//6. Видалити пост
/*
$post=Post::find(4);
$post->delete();
*/

//7. Створити 10 тегів
/*
$tag = new Tag();
$tag->title='title 1';
$tag->slug='slug 1';
$tag->save();

$tag = new Tag();
$tag->title='title 2';
$tag->slug='slug 2';
$tag->save();

$tag = new Tag();
$tag->title='title 3';
$tag->slug='slug 3';
$tag->save();

$tag = new Tag();
$tag->title='title 4';
$tag->slug='slug 4';
$tag->save();

$tag = new Tag();
$tag->title='title 5';
$tag->slug='slug 5';
$tag->save();

$tag = new Tag();
$tag->title='title 6';
$tag->slug='slug 6';
$tag->save();

$tag = new Tag();
$tag->title='title 7';
$tag->slug='slug 7';
$tag->save();

$tag = new Tag();
$tag->title='title 8';
$tag->slug='slug 8';
$tag->save();

$tag = new Tag();
$tag->title='title 9';
$tag->slug='slug 9';
$tag->save();

$tag = new Tag();
$tag->title='title 10';
$tag->slug='slug 10';
$tag->save();
*/

//8. Кожному вже збереженому посту прикріпити по 3 випадкові теги
/*
$posts = Post::all();
foreach ($posts as $post) {
    $post->tags()->attach([rand(1,10), rand(1,10), rand(1,10)]);
}
*/
