<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB; 
use Session;

class SongsController extends Controller
{
    //
    public function edit(Request $request)
    {
        $messages = [];

        $id = $request->input('id', null);

        if ($request->has('id')) {
            // this is editing an existing record
            $query = "
                SELECT *
                FROM `songs`
                WHERE `id` = ?
            ";
            $record = DB::selectOne($query, [$id]);
        } else {
            // this is creating a new record, create an empty object
            $record = (object)[
                'id'          => null,
                'songName'        => null,
                'videoCode'        => null,
                'authorName'        => null,
                'HTMLcode'        => null,
            ];
        }
        // now I have $record object !!

        // if the form was submitted
        if ($request->method() == 'POST') {
 
            // ***** NEEDS TO BE FINISHED!!!!! **** 
            // validate request data
            // $this->validate($request, [
            //     'name' => 'required',
            //     // ...
            // ]);
            $valid = true;

            
 
            // update the data from request
            $record->songName = $request->input('songName');
            $record->videoCode = $request->input('videoCode');
            $record->authorName = $request->input('authorName');
            $record->HTMLcode = $request->input('HTMLcode');
            // ...
            if (!$record->songName) {
                $messages[] = 'Please fill in the name';
                $valid = false;
            }
            // save the data
            if ($valid) {
                if ($request->has('id')) {
                    // update existing record
                    $query = 
                       "UPDATE `songs`
                       SET `songName` = ?,
                       `videoCode` = ?,
                       `authorName` = ?,
                       `HTMLcode` = ?
                       WHERE `id` = ?
                           
                    ";
                    DB::update($query, [
                        $record->songName,
                        $record->videoCode,
                        $record->authorName,
                        $record->HTMLcode,
                        $record->id,
                        // ...
                    ]);
                } else {
                    // insert a new record
                    $query = 
                       "INSERT
                       INTO `songs`
                       (`songName`, `videoCode`, `authorName`, `HTMLcode`)
                       VALUES
                       (?, ?, ?, ?)
                    ";

                    DB::insert($query, [
                        $record->songName,
                        $record->videoCode,
                        $record->authorName,
                        $record->HTMLcode,
                        // ...
                    ]);
     
                    // update the value of the autoincremented id
                    $record->id = DB::getPdo()->lastInsertId();
                    
                    
                }
                
                // flash success message
                Session::flash('success_message', 'OK!');
    
                // redirect to edit
                return redirect('/form-test-edit/edit?id='.$record->id);
            }
            
        }
 
        // prepare the edit form
        $edit_form = view('forms/edit-form', [
            'record' => $record
        ]);
        // dd($record);
        
 
        // put the form into the rest of the page
        return view('/index', [
            'content' => $edit_form
        ]);
        
    }

}
