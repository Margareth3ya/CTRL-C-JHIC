<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartController extends Controller
{
    public function index()
    {
        $departments = [
            'tik' => [
                'title' => 'Departemen TIK',
                'cover' => '/assets/departemen-tik.png',
                'majors' => [
                    [
                        'id' => 'rpl',
                        'name' => 'RPL (Rekayasa Perangkat Lunak)',
                        'emoji' => '💻',
                        'desc' => 'Belajar coding, database, pemrograman web, mobile, dan software engineering.',
                        'image' => '/assets/jurusan-rpl.png',
                    ],
                    [
                        'id' => 'dkv',
                        'name' => 'DKV (Desain Komunikasi Visual)',
                        'emoji' => '🎨',
                        'desc' => 'Fokus pada desain grafis, ilustrasi, desain digital, dan branding.',
                        'image' => '/assets/jurusan-dkv.png',
                    ],
                    [
                        'id' => 'bp',
                        'name' => 'BP (Broadcasting dan Perfilman)',
                        'emoji' => '📹',
                        'desc' => 'Produksi film, editing video, penyiaran, dan perfilman.',
                        'image' => '/assets/jurusan-bp.png',
                    ],
                    [
                        'id' => 'nima',
                        'name' => 'NIMA (Animasi)',
                        'emoji' => '🎮',
                        'desc' => 'Mempelajari animasi 2D, 3D, VFX, dan multimedia digital.',
                        'image' => '/assets/jurusan-animasi.png',
                    ],
                    [
                        'id' => 'bdp',
                        'name' => 'BDP (Bisnis Digital & Pemasaran)',
                        'emoji' => '📈',
                        'desc' => 'E-commerce, pemasaran digital, dan kewirausahaan.',
                        'image' => '/assets/jurusan-bdp.png',
                    ],
                    [
                        'id' => 'tkj',
                        'name' => 'TKJ (Teknik Komputer & Jaringan)',
                        'emoji' => '🖧',
                        'desc' => 'Networking, server, cloud computing, dan keamanan jaringan.',
                        'image' => '/assets/jurusan-tkj.png',
                    ],
                ],
            ],

            'elektro' => [
                'title' => 'Departemen Kelistrikan',
                'cover' => '/assets/departemen-elektro.png',
                'majors' => [
                    [
                        'id' => 'teav',
                        'name' => 'TE & AV (Teknik Elektronika & Audio Video)',
                        'emoji' => '📺',
                        'desc' => 'Mempelajari elektronika dasar, sistem audio, dan perangkat video.',
                        'image' => '/assets/jurusan-teav.png',
                    ],
                    [
                        'id' => 'tl',
                        'name' => 'TL (Teknik Pembangkit Tenaga Listrik)',
                        'emoji' => '⚡',
                        'desc' => 'Sistem pembangkit tenaga listrik dan distribusi energi.',
                        'image' => '/assets/jurusan-tl.png',
                    ],
                    [
                        'id' => 'tei',
                        'name' => 'TEI (Teknik Elektronika Industri)',
                        'emoji' => '🏭',
                        'desc' => 'Elektronika industri, kontrol otomatis, dan PLC.',
                        'image' => '/assets/jurusan-tei.png',
                    ],
                    [
                        'id' => 'tki',
                        'name' => 'TKI (Teknik Kimia Industri)',
                        'emoji' => '⚗️',
                        'desc' => 'Proses kimia industri, analisis laboratorium, dan teknologi bahan.',
                        'image' => '/assets/jurusan-tki.png',
                    ],
                ],
            ],

            'otomotif' => [
                'title' => 'Departemen Otomotif',
                'cover' => '/assets/departemen-otomotif.png',
                'majors' => [
                    [
                        'id' => 'tp',
                        'name' => 'TP (Teknik Permesinan)',
                        'emoji' => '🔩',
                        'desc' => 'Mesin bubut, frais, CNC, dan teknologi manufaktur.',
                        'image' => '/assets/jurusan-tp.png',
                    ],
                    [
                        'id' => 'tpl',
                        'name' => 'TPL (Teknik Pengelasan)',
                        'emoji' => '🔥',
                        'desc' => 'Pengelasan logam, fabrikasi, dan konstruksi teknik.',
                        'image' => '/assets/jurusan-tpl.png',
                    ],
                    [
                        'id' => 'tbsm',
                        'name' => 'TBSM (Teknik Bisnis Sepeda Motor)',
                        'emoji' => '🏍️',
                        'desc' => 'Perawatan, servis, dan manajemen bisnis sepeda motor.',
                        'image' => '/assets/jurusan-tbsm.png',
                    ],
                    [
                        'id' => 'tkr',
                        'name' => 'TKR (Teknik Kendaraan Ringan)',
                        'emoji' => '🚗',
                        'desc' => 'Mesin kendaraan, sistem kelistrikan mobil, dan perawatan mobil.',
                        'image' => '/assets/jurusan-tkr.png',
                    ],
                    [
                        'id' => 'bo',
                        'name' => 'BO (Teknik Perbaikan Body Otomotif)',
                        'emoji' => '🛠️',
                        'desc' => 'Perbaikan, pengecatan, dan rekayasa body kendaraan.',
                        'image' => '/assets/jurusan-bo.png',
                    ],
                ],
            ],
        ];
        return view('program.jurusan', compact('departments'));
    }
}
