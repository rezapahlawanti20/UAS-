<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $berita = Berita::all();
        return view('dashboard.index', compact('berita'));
    }
}
