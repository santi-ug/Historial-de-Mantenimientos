<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Observation extends Model
{
    // Este trait se utiliza para generar datos de prueba de manera rápida y sencilla para el modelo.
    use HasFactory;
    //solo los que puede ser cambiado popr el usuario
    //$fillable especifica qué campos del modelo pueden ser asignados de manera masiva 
    //(es decir, utilizando el método create o update en un solo paso). 
    //En este caso, los campos name, brand, ram, y cpu son los únicos campos que pueden ser asignados de esta manera
    protected $fillable = [
        'description',
        'owner',
        'computer',
        'category'
    ];

    public function computer(): BelongsTo 
    {
        return $this->belongsTo(Computer::class);
    }

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
}
