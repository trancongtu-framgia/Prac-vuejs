<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestZipController extends Controller
{
    public function index()
    {
//        if (file_exists(public_path('anh1.jpg.zip'))) {
            $Path = public_path('image.zip');
         \Zipper::make($Path)->extractTo('extract');

            return redirect()->back();
//        }
    }

    public function store(Request $request)
    {
//        if ($request->hasFile('file_data')) {
//            $file = $request->file('file_data');
//            $name = $file->getClientOriginalName();
            $url = public_path();
//            $file->move($url, $name);
            $fileZip = \Zipper::make(public_path('image.zip'))->add(public_path('image'))->close();
            return redirect()->back();
//        }
    }
}
