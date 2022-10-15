<?php

namespace Test\HW7\Source\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{

    public $timestamps = false;

    protected $fillable = ['title', 'slug'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public static function factory($quantity = 1)
    {
        for ($i = 1; $i <= $quantity; $i++) {
            $data['title'] = Str::random();
            $data['slug'] = $data['title'];

            self::query()->create($data);
        }
    }
}

