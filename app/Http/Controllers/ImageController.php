<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        // Salva a imagem no disco temporário
        $imagePath = $request->file('image')->store('temp');

        // Chama o script Python passando o caminho da imagem
        $pythonScript = 'path/to/your/python/script.py';
        $pythonCommand = "python {$pythonScript} {$imagePath}";
        $output = shell_exec($pythonCommand);

        // Processa o resultado da classificação
        $classificationResult = json_decode($output, true);

        // Retorna a resposta para o frontend
        return response()->json($classificationResult);
    }
}
