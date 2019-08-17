<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{

    public function show()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {

            $filename = $request->file('image')->getClientOriginalName();
            $filesize = $request->file('image')->getClientSize();

            // return $filesize;

            // $request->file('image')->store('public/upload');

            // return $request->file('image')->store('public/upload');
            // return 'yes';

            $data = new Media;
            $data->name = $filename;
            $data->size = $filesize;

            if( $data->save() ){
                return 'yes';
            }

        }

        return $request->all();
    }
}
