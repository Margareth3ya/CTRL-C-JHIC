<?php

/**
 * TOLONG JANGAN DIOTAK ATIK
 * HEHE
 */

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
                    Berdasarkan minat berikut: {$keyword}, rekomendasikan jurusan SMK yang paling cocok.

                    ⚠️ Aturan:
                    1. Jika minat sesuai dengan salah satu jurusan SMK PGRI 3 MALANG Berikut adalah daftar jurusannya:
                    ** Departemen / Kategori TIK: **
                        * RPL (Rekayasa Perangkat Lunak)
                        * DKV (Desain Komunikasi Visual)
                        * BP (Broadcasting dan Perfilman)
                        * NIMA (Animasi)
                        * BDP (Bisnis Digital & Pemasaran)
                    ** Departemen / Kategori Kelistrikan: **
                        * TE & AV (Teknik Elektronika &  Audio Video)
                        * TL (Teknik Pembangkit Tenaga Listrik)
                        * TEI (Teknik Elektronika Industri)
                        * TKI (Teknik Kimia Industri)
                    ** Departemen / Kategori Otomotif: **
                        * TP (Teknik Permesinan)
                        * TPL (Teknik Pengelasan)
                        * TBSM (Teknik Bisnis Sepeda Motor)
                        * TKR (Teknik Kendaraan Ringan)
                        * BO (Teknik Perbaikan Body Otomotif)
                    , balas dengan JSON berikut:
                    {
                    \"name\": \"Nama Jurusan\",
                    \"department\": \"Kategori\",
                    \"description\": \"Penjelasan singkat kenapa cocok\"
                    }

                    2. Jika minat TIDAK relevan dengan jurusan SMK, balas dengan JSON berikut:
                    {
                    \"name\": \"Tidak ditemukan\",
                    \"department\": \"N/A\",
                    \"description\": \"Maaf, kami tidak menemukan jurusan SMK yang sesuai dengan minat tersebut. Silakan coba masukkan minat lain yang lebih spesifik.\"
                    }

                    Format jawaban HARUS JSON valid tanpa ```.
                    ";


        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=" . env('GEMINI_API_KEY'), [
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

        $cleanText = preg_replace('/```(json)?|```/', '', $aiText);
        $cleanText = trim($cleanText);

        $parsed = json_decode($cleanText, true);

        if (json_last_error() === JSON_ERROR_NONE) {
            return response()->json($parsed);
        } else {
            return response()->json(['raw' => $aiText]);
        }

    }

}