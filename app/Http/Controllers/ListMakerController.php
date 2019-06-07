<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ListMakerController extends Controller
{
    public function index()
    {
        $songs = DB::select(
        'SELECT * 
        FROM `songs` 
        ORDER BY `id` ASC');
       return view('index',
       [
           'songs' => $songs
       ]);
    }
}
