<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function validateToken($request)
    {               
        if (!$request->hasHeader('x-api-key')) {
            return response()->json(['error' => 'x-api-key header is missing'], 400);
        }

        if ($request->header('x-api-key')!== "ZtVdh8XQ2U8pWI2gmZ7f796Vh8GllXoN7mr0djNf")
        {
            return response()->json(['error' => 'não autorizado'], 401);
        }
    }
    
}


