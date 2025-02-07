<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //

    protected $fillable = [
        'title',
        'description',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];


}

// which command i ran to create the controller for the blog model?
// php artisan make:controller BlogController --resource

// what about the blog route and html page?
