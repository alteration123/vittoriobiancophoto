<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VbpGalleryController extends Controller
{
    public function index()
    {
        $actives = [];
        $actives['home'] = "";
        $actives['gallery'] = "active";
        $actives['artist'] = "";

        return view('vbp/page/gallery/home', ["actives" => $actives]);
    }
}
