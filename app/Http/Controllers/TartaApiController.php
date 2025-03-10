<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarta;
use App\Http\Resources\TartaCollection;

/**
 * @OA\Info(
 *      title="API de Tartas",
 *      version="1.0",
 *      description="Documentación de la API de Tartas con Swagger"
 * )
 *
 * @OA\Tag(
 *     name="Tartas",
 *     description="Endpoints para gestionar tartas"
 * )
 */
class TartaApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/tartas",
     *     tags={"Tartas"},
     *     summary="Lista todas las tartas",
     *     @OA\Response(
     *         response=200,
     *         description="Lista de tartas",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Tarta")
     *         )
     *     )
     * )
     */
    public function index()
    {
        return new TartaCollection(Tarta::all());
    }
}
