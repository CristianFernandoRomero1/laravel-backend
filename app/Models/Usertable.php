<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usertable extends Model
{
    //use HasFactory;

    protected $table = 'tablausuarios';
    protected $primaryKey = 'IDusuario';
    public $timestamps = false;
}
