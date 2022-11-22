<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dadosdispositivos extends Model
{
    use HasFactory;
    protected $fillable = [
        'local', 'serial', 'FK_Usuario'
    ];
}//fim da classe
