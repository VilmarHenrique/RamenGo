<?php

namespace App\Http\Controllers;

use App\Models\Protein;
use Illuminate\Http\Request;

class ProteinController extends Controller
{
    public function index(Request $request)
    {
        $response = $this->validateToken($request);
        if (isset($response)) return $response;

        $proteins = Protein::select(
        'imageInactive',
        'imageActive',
        'name',
        'description',
        'price')->get();

        return response()->json($proteins);
    }
}
