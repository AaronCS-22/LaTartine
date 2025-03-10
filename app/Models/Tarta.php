<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Tarta",
 *     title="Tarta",
 *     description="Modelo de una tarta",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="nombre", type="string", example="Tarta de Chocolate"),
 *     @OA\Property(property="precio", type="number", format="float", example=12.5),
 *     @OA\Property(property="ingredientes", type="string", example="Chocolate, Harina, Azúcar"),
 *     @OA\Property(property="imagen", type="string", example="http://localhost/storage/tarta.jpg"),
 *     @OA\Property(property="color", type="string", example="Marrón"),
 *     @OA\Property(property="alergenos", type="boolean", example=true),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2025-03-10 14:00:00"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2025-03-10 14:00:00")
 * )
 */
class Tarta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'precio', 'ingredientes', 'imagen', 'color', 'alergenos'
    ];
}

