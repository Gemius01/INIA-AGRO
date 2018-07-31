<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicHtmlController extends Controller
{
    public function index()
    {
    	return view('public.publicaciones');
    }
}
