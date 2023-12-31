<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'users_id',
        'inscurance_price',
        'shipping_price',
        'total_price',
        'transaction_status',
        'code',
        'address',
        'zip_code',
        'phone',
        'name'
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo( User::class, 'users_id', 'id');
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transactions_id');
    }
}
