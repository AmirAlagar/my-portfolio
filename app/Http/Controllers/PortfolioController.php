<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function resume(){
        $resume = 'files/AmirYahyaAlagar-Resume.pdf';
        return response()->file($resume);
    }

}