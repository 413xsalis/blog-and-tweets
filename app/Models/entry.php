<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Str;

class Entry extends Model
{
    // Entry->user
    // Entryn - 1 user
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
            $this->attributes['title'] = $value;
            $this->attributes['slug'] = Str::slug($value);

    }

    public function getUrl()
    {
        return url("entries/$this->slug-$this->id");
    }
}
