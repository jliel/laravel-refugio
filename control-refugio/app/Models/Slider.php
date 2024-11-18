<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{

    use HasFactory;
    /**
     * Write code on Method
     *
     * @return 
     */

    protected $fillable = [
        'title',
        'url'
    ];

}