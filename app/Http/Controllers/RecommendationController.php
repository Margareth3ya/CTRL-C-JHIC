<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecommendationController extends Controller
{
    public function getRecommendation(Request $request)
    {
        $keyword = $request->input('keyword');

        if (!$keyword) {
            return response()->json(['error' => 'Keyword wajib diisi'], 400);
        }

        $prompt = "
    User memberikan minat: \"$keyword\".
    Pilihkan jurusan SMK yang paling sesuai dari daftar berikut:
    - RPL (Rekayasa Perangkat Lunak) → coding, software, aplikasi
    - DKV (Desain Komunikasi Visual) → desain grafis, multimedia
    - Teknik Pemesinan
    - Teknik Otomotif
    - Teknik Kelistrikan
    - Teknik Jaringan Komputer
    - Animasi
    - dll (total 15 jurusan di sekolah)

    Jawab **hanya** dalam format JSON:
    {
        \"name\": \"Nama Jurusan\",
        \"department\": \"Kategori\",
        \"description\": \"Alasan singkat kenapa cocok\"
    }
    ";

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=" . env('GEMINI_API_KEY'), [
                    "contents" => [
                        [
                            "parts" => [["text" => $prompt]]
                        ]
                    ]
                ]);

        $result = $response->json();

        if (empty($result['candidates'][0]['content']['parts'][0]['text'])) {
            return response()->json(['error' => 'Tidak ada hasil dari Gemini', 'debug' => $result]);
        }

        $aiText = $result['candidates'][0]['content']['parts'][0]['text'];
        $cleanText = trim($aiText, " \n\r\t\0\x0B`");

        $parsed = json_decode($cleanText, true);

        if (json_last_error() === JSON_ERROR_NONE) {
            return response()->json($parsed);
        } else {
            return response()->json(['raw' => $aiText]);
        }
    }

}