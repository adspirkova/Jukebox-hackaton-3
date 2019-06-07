<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ListMakerController extends Controller
{
    public function index()
    {   $navigation = view ('nav');
        
        
        $songs = DB::select(
        'SELECT * 
        FROM `songs` 
        ORDER BY `id` ASC');

        $list = view('list/list', [
            'songs' => $songs
        ]);
        
       return view('index',
       [   'nav' => $navigation,
           'content' => $list
       ]);
    }
}
