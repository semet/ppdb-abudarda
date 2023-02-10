<?php

namespace App\Http\Controllers\Ppdb;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        return view('ppdb.index');
    }
}
