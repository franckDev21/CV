<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    //
    public function download(){
        return Storage::download('CV-francklin-tiomela.pdf');
    }
}
