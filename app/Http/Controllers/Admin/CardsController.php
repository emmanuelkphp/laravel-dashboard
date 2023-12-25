<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardsController extends Controller{
    
    public function index(){
        return view('admin.cards.create');
    }

    public function create(){
        return view('admin.cards.create');
    }
}
