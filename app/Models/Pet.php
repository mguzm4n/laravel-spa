<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    public function species(){
        return $this->belongsTo(Species::class);
    }

    public function owner(){
        return $this->belongsTo(User::class, 'user_id', 'owner_id');
    }
}