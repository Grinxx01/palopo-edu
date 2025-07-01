<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Models\Institusi;

class HomeController extends Controller
{
    public function index(Request $request)
{
    $levelId = $request->query('level');

    // Query semua level untuk tombol filter
    $educationLevels = EducationLevel::all();

    // Ambil institusi, filter jika level dipilih
    $institusis = Institusi::with('educationLevel')
        ->when($levelId, function($query) use ($levelId) {
            $query->where('education_level_id', $levelId);
        })
        ->get();

    // Data level aktif (untuk teks "Menampilkan: ...")
    $currentLevel = $levelId ? EducationLevel::find($levelId) : null;

return view('home', [
    'institutions' => $institusis,
    'educationLevels' => $educationLevels,
    'levelId' => $levelId,
    'currentLevel' => $currentLevel,
]);
}

}
