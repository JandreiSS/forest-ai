<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        
        $image = $request->file('image');
        $originalName = $request->file('image')->getClientOriginalName();

        $response = Http::post('http://localhost:5000/classify', [
            'image' => $image
        ]);

        if($response->successful()) {
            $classificationResults = $response->json();

            return view('classifications', ['results' => $classificationResults, 'originalName' => $originalName]);
        } else {
            return response(['error' => 'Erro na requisição'], $response->status());
        }

    }
}
