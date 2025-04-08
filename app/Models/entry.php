<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // Entry->user
    // Entryn - 1 user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
