<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
{
    $bidangs = Bidang::all();

    return view('bidangs.index',compact('bidangs'));
}
}
