<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
   function download(){
    return response('File Downloading');
   }
   
   function downloadInvoice($invoiceId){
    return response("Downloading Invoice with Id:{$invoiceId}");
   }
   function error(){
    return response("sorry!no invoice id provided");
   }
}
