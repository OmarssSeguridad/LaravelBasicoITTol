<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre', 'id_editorial', 'id_clasificacion', 'isbn', 'tot_paginas', 'status'];

    public function editorial()
    {
        return $this->belongsTo('App\Models\Editorial', 'id_editorial', 'id');
    }
    public function clasificacion()
    {
        return $this->belongsTo('App\Models\Clasificacion', 'id_clasificacion', 'id');
    }
}
