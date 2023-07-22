<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function sendImageToAPI(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:4096',
        ], [
            'image.required' => 'A imagem é obrigatória.',
            'image.mimes' => 'A imagem deve ser um arquivo do tipo: :values.',
            'image.max' => 'A imagem não deve ter mais de :max kilobytes.',
        ]);

        $client = new Client(['verify' => false]);
        
        $image = $request->file('image');

        $imagePath = $image->getPathName();
        dd($imagePath);
        $originalName = $image->getClientOriginalName();

        $response = $client->request('POST', 'http://127.0.0.1:5000/classify', [
            'multipart' => [
                [
                    'name' => 'image',
                    'contents' => fopen($imagePath, 'r')
                ]
            ]
        ]);

        $responseBody = $response->getBody();
        $jsonResponse = json_decode($responseBody, true);
    
        return view('classifications', compact(['response' => $jsonResponse, 'name' => $originalName]));
    }
}
