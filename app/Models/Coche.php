<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $fillable = ['marca', 'modelo', 'color', 'precio'];

    public function scopeMarca($query, $marca)
    {
        if (!empty($marca)) {
            return $query->where('marca', $marca);
        }
    }

    public function scopeColor($query, $color)
    {
        if (!empty($color)) {
            return $query->where('color', $color);
        }
    }

    public function scopePrecio($query, $precio)
    {
        if (!empty($precio)) {
            return $query->where('precio', '<=', $precio);
        }
    }

}