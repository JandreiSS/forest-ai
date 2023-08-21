<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function sendImageToAPI(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:10240',
        ], [
            'image.required' => 'A imagem é obrigatória.',
            'image.mimes' => 'A imagem deve ser um arquivo do tipo: :values.',
            'image.max' => 'A imagem não deve ter mais de :max kilobytes.',
        ]);

        $image = $request->file('image');
        $imagePath = $image->getPathName();
        $originalName = $image->getClientOriginalName();

        // Iniciar cURL
        $ch = curl_init();

        // Configurar a requisição
        curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:5000/classify');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: multipart/form-data',
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'image' => new \CURLFile($imagePath, $image->getClientMimeType(), $originalName)
        ]);

        
        // Executar a requisição e obter a resposta
        $responseBody = curl_exec($ch);
        dd($responseBody);

        // Fechar cURL
        curl_close($ch);

        $jsonResponse = json_decode($responseBody, true);

        return view('classifications/index', ['results' => $jsonResponse, 'originalName' => $originalName]);
    }
}
