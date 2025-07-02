<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Models\Institusi;

class HomeController extends Controller
{
    public function index(Request $request)
{
        $search = $request->input('search');
        $levelId = $request->input('level');

        $query = Institusi::with('educationLevel');

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('nama_sekolah', 'like', '%' . $search . '%')
                  ->orWhere('alamat', 'like', '%' . $search . '%');
            });
        }

        if ($levelId) {
            $query->where('education_level_id', $levelId);
        }

        $institutions = $query->get();
        $educationLevels = EducationLevel::all();
        $currentLevel = $levelId ? EducationLevel::find($levelId) : null;

        return view('home', compact('institutions', 'educationLevels', 'levelId', 'currentLevel'));
    }
}
