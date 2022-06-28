<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;

class TinyMCEController extends Controller
{
    public function upload_tinymce_image()
    {
        $file = request()->file('file');
        $path = $file->store('tinymce_uploads', 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
}
