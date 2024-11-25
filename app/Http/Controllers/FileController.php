<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
   function download(){
    return response('File Downloading');
   }
}
