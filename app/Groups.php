<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Transaction;

class Groups extends Model
{
    function users(){
        return $this->belongsToMany(User::class,'group_members','group_id','user_id');
    }

    function belongToUser(){
        return $this->belongsTo(User::class);
    }

    function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
