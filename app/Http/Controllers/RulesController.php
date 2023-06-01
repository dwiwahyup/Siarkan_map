<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rules;


class RulesController extends Controller
{
    public function index()
    {
        //return dashbord
        $rules = Rules::all();
        // dd($rules);
        return view('dashboard.rules.index', ['rules' => $rules]);
    }
}
