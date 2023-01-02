<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'type', 'description', 'price', 'slug', 'quantity', 'size', 'condition'
    ];

    protected $hidden = [

    ];

    public function galleries(){
        return $this->hasMany( ProductGallery::class, 'products_id', 'id' );
    }

    public function user(){
        return $this->hasOne( User::class, 'id', 'users_id');
    }
}
