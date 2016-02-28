<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages.index');
    }

    public function submit(Request $request)
    {
    	$info = $request->all();
    	return view('pages.success', compact('info'));
    }
}
