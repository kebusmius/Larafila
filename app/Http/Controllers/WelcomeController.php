<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Teknologi; // Pastikan model Teknologi ada jika digunakan
use App\Models\Team;

class WelcomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data brand
        $brands = Brand::with(['teknologis', 'team'])->get();

        $teknologis = Teknologi::all();

        $teams = Team::all();

        // Contoh similar brands untuk Project Similar
        $similarBrands = Brand::inRandomOrder()->take(4)->get(); 

        // Mengirim data ke view welcome.blade.php
        return view('welcome', compact('brands', 'teknologis', 'teams', 'similarBrands'));
    }

    public function show($id)
    {
        // Ambil detail brand berdasarkan ID yang di-click
        $brand = Brand::findOrFail($id);

        // Ambil semua teknologi untuk ditampilkan (jika diperlukan di halaman detail)
        $teknologis = Teknologi::all();

        $teams = Team::all();

        // Mengambil brand lain untuk 'Project Similar', kecuali brand yang sedang ditampilkan
        $similarBrands = Brand::where('id', '!=', $id)->inRandomOrder()->take(4)->get();

        // Kirim data ke view 'detail.blade.php'
        return view('detail', compact('brand', 'teknologis', 'teams', 'similarBrands'));
    }


}

