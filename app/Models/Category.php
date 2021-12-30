<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'categories';

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $fillable = ['name',];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];
}