<?php

namespace App\Http\Controllers;

use App\Models\Broth;
use Illuminate\Http\Request;

class BrothController extends Controller
{
    public function index(Request $request)
    {           
        $response = $this->validateToken($request);
        if (isset($response)) return $response;

        $broths = Broth::select(
        'imageInactive',
        'imageActive',
        'name',
        'description',
        'price')->get();

        return response()->json($broths);
    }
}
