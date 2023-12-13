<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function uploadImage($image, $path)
    {
        $file = $image;
        $extension = $file->getClientOriginalExtension();
        $filename = str::random() . '.' . $extension;
        $file->move(public_path('images/' . $path . '/'), $filename);

        return $filename;
    }
}
