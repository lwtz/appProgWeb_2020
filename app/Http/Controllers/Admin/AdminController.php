<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Alert;
class AdminController extends Controller
{
    public function index(){

        return view('admin.home.index');
    }
}
