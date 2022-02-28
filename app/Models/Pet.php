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


    /**
     * Belongs to customer user relation.
     */
    public function owner(){
        return $this->belongsTo(User::class, 'user_id', 'owner_id');
    }
}
