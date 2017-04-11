<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OfferingController extends Controller
{
    public function index(){

        $data = Offer::all();
        return view('offers.index', [
            'data' => $data
        ]);
    }
}
