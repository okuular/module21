<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ttext;

class TextController extends Controller
{
    public function index()
    {
        $context = ['tts' => Ttext::latest()->get()];
        return view('index',$context);
    }
    public function detail(Ttext $t)
    {
        return view('detail', ['t' => $t]);
    }
}
