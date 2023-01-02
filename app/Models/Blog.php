<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;


class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'category', 'description', 'date', 'photo', 'slug'
    ];

    protected $hidden = [

    ];

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
