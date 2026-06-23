<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    public function index()
{
    $prokers = Proker::with('divisi')->get();
    return view('prokers.index', compact('prokers'));
}
}

