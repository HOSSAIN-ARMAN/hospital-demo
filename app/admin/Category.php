<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'code',
        'image',
        'status'
    ];
}
