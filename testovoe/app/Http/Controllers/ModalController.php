<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function getModalHtml()
    {
        $html = view('/modal_window/test-tailwind')->render();
        return response()->json(['html' => $html]);
    }
}
