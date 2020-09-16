<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConnexionBdd extends Controller
{
    public function message(){

        $message = DB::table('messages')->first("content");

    return view('welcome', compact('message'));
    }
}
