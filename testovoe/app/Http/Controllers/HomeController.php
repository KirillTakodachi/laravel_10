<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();

        return view('home.index', compact('menuItems'));
    }
}
