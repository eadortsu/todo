<?php

namespace App\Http\Controllers;

use App\ListItem;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $name = explode(" ", Auth::user()->name);
        $initials = "";

        foreach ($name as $n) {
            $initials .= $n[0];
        }

        $items  = ListItem::all();
        return view('home',['initials'=>$initials,'items'=>$items]);
    }




}
