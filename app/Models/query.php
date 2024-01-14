<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class query extends Model
{
    protected $fillable  = ["query"];
    use HasFactory;
}
