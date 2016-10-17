<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ImagesController extends Controller
{
    public function upload ()
    {
    	return view ('img/uploads');

    }
}
