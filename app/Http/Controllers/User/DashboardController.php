<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Movie;

class DashboardController extends Controller
{
    public function index()
    {

        $featuredMovies = Movie::where('is_feature', true)->get();
        $allMovies = Movie::all();

        return inertia('User/Dashboard/index', [
            'featuredMovies' => $featuredMovies,
            'allMovies' => $allMovies,
        ]);
    }
}