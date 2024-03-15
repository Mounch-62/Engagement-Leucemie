<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BureauController extends Controller
{
    public function index () {
        return view('admin.bureau.index');
    }

}
