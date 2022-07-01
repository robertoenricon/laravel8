<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false; //Com essa declaracão, invalida o uso das migrations
    use HasFactory;
}
