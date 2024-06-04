<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Broth;
use App\Models\Protein;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $response = $this->validateToken($request);
        if (isset($response)) return $response;

        try {
            $request->validate([
                'brothId'   => 'required|exists:broths,id',
                'proteinId' => 'required|exists:proteins,id'
            ]);    
            
            $broth = Broth::find($request->brothId);    
            
            $protein = Protein::find($request->proteinId);
            if (!isset($protein) || !isset($broth)){
                return response()->json(['error' => "both brothId and proteinId are required"], 400);                
            }
                
            $order = Order::create([
                'broth_id'   => $broth->id,
                'protein_id' => $protein->id,
                'description' => $broth->name . ' and ' . $protein->name . ' Ramen.',
                'image' => "https://tech.redventures.com.br/icons/ramen/ramenChasu.png"
            ]);
    
            return response()->json([
                'id'          => $order->id,
                'description' => $order->description,
                'image'       => $order->image,
            ]);

        } catch (\Exception $e) {
            DB::rollback();   
             return response()->json(['error' => "could not place order"], 500);          
        }
    }    
}
