<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Araclar extends Model
{
    use HasFactory;

    protected $fillable = ['marka','model','yil','tip','sofor'];
}
