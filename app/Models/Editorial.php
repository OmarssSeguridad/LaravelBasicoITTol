<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre', 'descripcion','status'];

    public function EdiLib()
    {
        return $this->hasMany('App\Models\Libro');
    }

}
