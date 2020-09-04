<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Groups;
use App\Transaction;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    function groups(){
        return $this->belongsToMany(Groups::class,'group_members','user_id','group_id');
    }

    function hasmanygroups(){
        return $this->hasMany(Groups::class);
    }

    function transactions(){
        return $this->belongsToMany(Transaction::class,' transaction_users','user_id','transaction_id');
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'sender_id', 'reciever_id')->withPivot('status');
    }
}
