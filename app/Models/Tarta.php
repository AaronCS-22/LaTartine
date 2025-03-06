<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarta extends Model
{
    use HasFactory;
    protected $fillable = ["nombre", "precio", "imagen", "color", "ingredientes", "alergenos"];
}
