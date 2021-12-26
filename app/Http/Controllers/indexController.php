<?php

namespace App\Http\Controllers;

use App\Models\card;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $active = card::where('card_type','Active')->where('sale_end','>', now()->format('Y-m-d H:i:s'))->orderBy('id','DESC')->take(10)->get();
        $UpComing = card::where('card_type', 'UpComing')->where('sale_end','>',now()->format('Y-m-d H:i:s') )->orderBy('id','DESC')->take(10)->get();
        $Ended = card::where('card_type', 'Ended')->where('sale_end','>', now()->format('Y-m-d H:i:s'))->orderBy('id','DESC')->take(10)->get();
        $SandBox = card::where('card_type', 'SandBox')->where('sale_end','>', now()->format('Y-m-d H:i:s'))->orderBy('id','DESC')->take(10)->get();
        return view('index', compact('active', 'UpComing', 'Ended', 'SandBox'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function card_details(){
        return view('pages.card-details');
    }
    public function active(){
        return view('pages.active');
    }
    public function ended(){
        return view('pages.ended');
    }
    public function upcoming(){
        return view('pages.upcoming');

    }
    public function whitelist(){
        return view('pages.whitelist');
    }


    public function active_ico()
    {

        return $active = card::where('card_type','Active')->where('sale_end','>', now()->format('Y-m-d H:i:s'))->orderBy('id','DESC')->get();
    }


    public function UpComing_ico()
    {
        return $UpComing_ico = card::where('card_type','UpComing')->where('sale_end','>', now()->format('Y-m-d H:i:s'))->orderBy('id','DESC')->get();
    }


    public function Ended_ico()
    {
        return $Ended_ico = card::where('card_type','Ended')->where('sale_end','>', now()->format('Y-m-d H:i:s'))->orderBy('id','DESC')->get();
    }


    public function SandBox_ico()
    {
        return $Ended_ico = card::where('card_type','SandBox')->where('sale_end','>', now()->format('Y-m-d H:i:s'))->orderBy('id','DESC')->get();
    }
}
