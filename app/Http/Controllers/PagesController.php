<?php

namespace App\Http\Controllers;

use Corcel\Model\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected function parsePage($slug){
        return Page::slug($slug)->first();
    }

    public function problematicaIsee()
    {
        $page = $this->parsePage('problematica-isee');
        /*return view('pages',[
            "post" => $page
        ]);*/
        return view('pagine-statiche.problematica-isee');

    }


    public function appunti()
    {
        $page = $this->parsePage('appunti');
        return view('pages',[
            "post" => $page
        ]);
    }

    public function cartaDirittiDoveri()
    {
        $page = $this->parsePage('carta-dei-diritti-degli-studenti');
        return view('pages',[
            "post" => $page
        ]);
    }


}
