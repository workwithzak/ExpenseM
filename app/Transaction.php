<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Groups;
use App\transaction_items;

class Transaction extends Model
{
    function group(){
        return $this->belongsTo(Groups::class);
    }

    function items(){
        return $this->hasMany(transaction_items::class);
    }

    function users(){
        return $this->belongsToMany(User::class,' transaction_users','transaction_id','user_id');
    }
}
