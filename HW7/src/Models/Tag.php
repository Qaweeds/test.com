<?php

namespace Test\HW7\Source\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{

    protected $fillable = ['title', 'slug'];

    public function posts()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
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


