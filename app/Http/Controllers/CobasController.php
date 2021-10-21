<?php

namespace App\Http\Controllers;

use App\Models\Cobas;

class CobasController extends Controller
{
    //
    public function index()
    {
        $data = Cobas::all();
        return view('test-cobas', compact('data'));
    }
}
