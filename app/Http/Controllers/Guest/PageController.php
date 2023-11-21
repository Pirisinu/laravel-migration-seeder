<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Prova_connection;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
        $trains = Train::all();
        return view("layouts.main", compact('trains'));
    }

}
