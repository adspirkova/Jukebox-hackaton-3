<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ListMakerController extends Controller
{
    public function index()
    {   $navigation = view ('nav');
        $buttons = view ('songs/buttons');
        
        $songs = DB::select(
        'SELECT * 
        FROM `songs` 
        ORDER BY `id` ASC');

        $list = view('list/list', [
            'songs' => $songs,
            'buttons' => $buttons
        ]);
        
       return view('index',
       [   'nav' => $navigation,
           'content' => $list
       ]);
    }
}
