<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dadossensores extends Model
{
    use HasFactory;
    protected $fillable = [
        'status', 'FK_Dispositivo'
    ];

}//fim da classe
