<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ttext;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',['tts' =>Auth::user()->tts()->latest()->get()]);
    }

    public function create()
    {
        return view('t-create');
    }

    public function store(Request $request)
    {
        Auth::user()->tts()->create(['title' => $request->title,
            'author' => $request->author,
            'text' => $request->text]);
        return redirect()->route('home');
    }
    public function edit(Ttext $t)
    {
        return view('t-edit', ['t' => $t]);
    }
    public function update(Request $request, Ttext $t)
    {
        $t->fill(['title' => $request->title,
            'author' => $request->author,
            'text' => $request->text]);
        $t->save();
        return redirect()->route('home');
    }
    public function delete(Ttext $t)
    {
        return view('t-delete',['t' => $t]);
    }
    public function destroy(Ttext $t)
    {
        $t->delete();
        return redirect()->route('home');
    }
}
