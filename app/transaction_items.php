<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaction;

class transaction_items extends Model
{
    function transaction(){
        return $this->belongsTo(Transaction::class);
    }
}
