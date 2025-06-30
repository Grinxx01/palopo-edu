<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
{
    $levelId = $request->query('level');

    $institutions = \App\Models\Institusi::when($levelId, function($query) use ($levelId) {
        return $query->where('tingkat_pendidikan', $levelId);
    })->get();

    $educationLevels = \App\Models\EducationLevel::all();

    $currentLevel = $educationLevels->where('id', $levelId)->first();

    return view('home', [
        'institutions' => $institutions,
        'educationLevels' => $educationLevels,
        'currentLevel' => $currentLevel,
        'levelId' => $levelId,
    ]);
}

}
