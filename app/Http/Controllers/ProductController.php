<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

/**
 * Get all products.
 *
 * @OA\Get(
 *     path="/product",
 *     tags={"Product"},
 *     summary="Get all products",
 *     description="Get all products from the store",
 *     @OA\Response(
 *         response=200,
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(
 *                 property="products",
 *                 type="array",
 *                 @OA\Items(
 *                     type="object",
 *                     @OA\Property(
 *                         property="id",
 *                         type="integer",
 *                         example="1"
 *                     ),
 *                     @OA\Property(
 *                         property="nome",
 *                         type="string",
 *                         example="Teste 1"
 *                     )
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=405,
 *         description="Invalid input"
 *     )
 * )
 */
    public function getProduct() 
    {
        $products = [
            [
                'id' => 1,
                'nome' => 'Teste 1'
            ],
            [
                'id' => 2,
                'nome' => 'Teste 2'
            ]
        ];

        return response()->json(['products' => $products]);
    }
}
