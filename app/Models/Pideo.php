<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pideo extends Model
{
    use HasFactory;
    protected $table = "pideo";
    protected $fillable = ['nama_pideo','deskripsi_pideo','foto_pideo','pideo'];
}
