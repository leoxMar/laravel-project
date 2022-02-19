<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panini extends Model
{
    use HasFactory;

    protected $table = 'paninis';

    protected $fillable = [
        'name',
        'breadtype',
        'price'
    ];

}
