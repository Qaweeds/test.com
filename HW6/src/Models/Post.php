<?php

namespace Test\HW6\Source\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public function categories() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }


}

