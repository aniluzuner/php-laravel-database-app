<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calisanlar extends Model
{
    use HasFactory;

    protected $fillable = ['ad','soyad','gsm','email','yas','ehliyet','ingilizce','maas'];
}
