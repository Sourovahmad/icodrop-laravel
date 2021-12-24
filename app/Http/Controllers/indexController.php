<?php

namespace App\Http\Controllers;

use App\Models\card;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $active = card::where('card_type','Active')->take(10)->get();
        $UpComing = card::where('card_type', 'UpComing')->take(10)->get();
        $Ended = card::where('card_type', 'Ended')->take(10)->get();
        $SandBox = card::where('card_type', 'SandBox')->take(10)->get();
        return view('index', compact('active', 'UpComing', 'Ended', 'SandBox'));
    }
}
