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
        ORDER BY `songName` ASC');
       return view('forms/list/list',
       [
           'songs' => $songs
       ]);
    }
}
