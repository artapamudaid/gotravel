<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $items = TravelPackage::with(['galleries'])->skip(0)->take(4)->get();
        return view('pages.home', [
            'items' => $items
        ]);
    }
}
