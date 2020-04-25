<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Photo;
use Illuminate\Http\Request;

class VbpHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $debug = 'yes';

        $actives = [];
        $actives['home'] = "active";
        $actives['gallery'] = "";
        $actives['artist'] = "";

        $randomPhotos = [];
        $randomFourActive = [];
        $totalRandomPhotos = Photo::all()->random(12);

        for ($i = 0; $i < 3; $i++){
            $randomPhotos[$i] = [];
            if($i==0){
                $randomFourActive[$i] = 'active';
            }
            else{
                $randomFourActive[$i] = '';
            }
            for ($j = 0; $j < 4; $j++){
                $randomPhotos[$i][$j] = $totalRandomPhotos[$i*4 + $j];
            }
        }

        $galleries = Gallery::query()
            ->select('name', 'id', 'file')
            ->get();

        $galleriesJson = [];
        $i = 0;

        foreach ($galleries as $gallery){

            $photos = Photo::query()
                ->select('name', 'file')
                ->where('gallery_id', '=', $gallery['id'])
                ->get();
            $gallery['photos'] = $photos;
            if($i==0){
                $gallery['active'] = 'yes';
                $gallery['classy'] = 'active';
            }
            else{
                $gallery['active'] = 'no';
            }
            $gallery['index'] = $i;
            $gallery['class'] = '';
            $i++;
            $galleriesJson[] = $gallery;

            if ($debug == "yes"){
                return view('vbp/page/home/home', [
                    "galleriesJson" => $galleriesJson,
                    'debug' => $debug,
                    'actives' => $actives,
                    'randomPhotos' => $randomPhotos,
                    'randomFourActive' => $randomFourActive
                ]);
            }
        }


        return view('vbp/page/home/home', [
            "galleriesJson" => $galleriesJson,
            'debug' => $debug,
            'actives' => $actives,
            'randomPhotos' => $randomPhotos,
            'randomFourActive' => $randomFourActive
        ]);
    }

}
