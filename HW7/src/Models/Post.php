<?php

namespace Test\HW7\Source\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    protected $fillable = ['title', 'slug', 'category_id', 'body'];


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public static function factory($quantity = 1)
    {
        $categories = Category::query()->pluck('id')->toArray();

        for ($i = 1; $i <= $quantity; $i++) {
            $data['title'] = Str::random();
            $data['slug'] = $data['title'];
            $data['body'] = Str::random(100);
            $data['category_id'] = $categories[array_rand($categories)];

            self::query()->create($data);
        }
    }

    public static function addTagsToAllPosts()
    {
        $posts = self::all();

        foreach ($posts as $post) {
            $post->tags()->attach(Tag::inRandomOrder()->limit(3)->pluck('id'));
        }
    }
}

