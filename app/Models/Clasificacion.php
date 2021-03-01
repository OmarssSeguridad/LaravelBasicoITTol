<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre', 'status'];

    public function ClasLib()
    {
        return $this->hasMany('App\Models\Libro');
    }

}
