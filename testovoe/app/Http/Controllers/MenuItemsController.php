<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::all();

        return view('layouts.app', compact('menuItems'));
    }
}
