<?php

namespace Hscomp\PhotoUploader;

use App\Http\Controllers\Controller;

class PhotoUploaderController extends Controller
{
    public function index()
    {
        return view('hscomp/photo-uploader::index')->with(['name' => 'Petr']);
    }
}
