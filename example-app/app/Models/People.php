<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    protected $fillable = ['name','surname','telephone','street','city','country'];

    protected $table = 'people';

    use HasFactory;
}