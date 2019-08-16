<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload.upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $request->file('image');

        if( $request->hasFile('image') ){


            // return $request->image->extension();
            // return $request->image->storeAs('public', 'bitfumes.jpg');
            // return $request->image->path();
            // return $request->image->store('public');
            // return Storage::put('public', $request->file('image'));
            return Storage::putFile('public/new', $request->file('image'));
        }
        else{
            return 'No file selected.';
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return Storage::allFiles('public');
        // return Storage::files('public');

        // if( Storage::deleteDirectory('make') ){
        //     return 'Delete Directory => Make';
        // }

        // $url = Storage::url('bitfumes.jpg');
        // return '<img src="'.$url.'" alt="" />';

        // return Storage::lastModified('public/bitfumes.jpg');

        // if( Storage::copy('public/bitfumes.jpg', 'bitfumes.jpg') ){
        //     return 'File Moved.';
        // }

        $rewContent =Storage::get('public/bitfumes.jpg');
        if(Storage::put('newImage.jpg', $rewContent)){
            return 'File 2 is created';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
