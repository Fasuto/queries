<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function queryBuilder(){
       $recors = DB::table('clients')->paginate(10);
       return view('queryBuilder',['records'=>$recors]);
    }

    public function eloquent(){
       $recors = Client::paginate(10);
       return view('eloquent',['records'=>$recors]);
    }
}
