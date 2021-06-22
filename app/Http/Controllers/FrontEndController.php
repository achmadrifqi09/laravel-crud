<?php

namespace App\Http\Controllers;
use App\Models\Package;
use App\Models\Company;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $packages = Package::all();
        $profiles = Company:: all();

        return view('index', ['packages' => $packages], ['profiles' => $profiles]);
    }
}
