<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pirata extends Model
{
    use HasFactory;
    protected $table = 'pirata';
    public $timestamps = false;
}
