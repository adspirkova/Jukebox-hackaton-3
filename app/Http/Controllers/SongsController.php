<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function hi()
    {
        echo 'Hi there!';
    }
    //
    public function edit(Request $request)
    {
        if ($request->has('id')) {
            // this is editing an existing record
            $query = "
                SELECT ...
            ";
            $record = DB::selectOne($query, [
                $request->input('id')
            ]);
        } else {
            // this is creating a new record, create an empty object
            $record = (object)[
                'id'          => null,
                'name'        => null
                // ...
            ];
        }
 
        // if the form was submitted
        if ($request->method() == 'POST') {
 
            // validate request data
            $this->validate($request, [
                'name' => 'required',
                // ...
            ]);
 
            // update the data from request
            $record->name = $request->input('name');
            // ...
 
            // save the data
            if ($request->has('id')) {
                // update existing record
                $query = 
                   "UPDATE ...
                ";
                DB::update($query, [
                    $record->name
                    // ...
                ]);
            } else {
                // insert a new record
                $query = 
                   "INSERT ...
                ";
                DB::insert($query, [
                    $record->name
                    // ...
                ]);
 
                // update the value of the autoincremented id
                $record->id = DB::getPdo()->lastInsertId();
            }
 
            // flash success message
            Session::flash('success_message', 'OK!');
 
            // redirect to edit
            return redirect('url/to/edit?id='.$record->id);
        }
 
        // prepare the edit form
        $edit_form = view('some/path/edit', [
            'record' => $record
        ]);
 
        // put the form into the rest of the page
        return view('some/path/html', [
            'content' => $edit_form
        ]);
    }

}
