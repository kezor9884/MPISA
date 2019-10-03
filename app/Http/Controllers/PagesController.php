<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Index Section';
        return view('pages.index')->with('title',$title);
    }

    public function service(){
        $data = array('title'=> 'Our Service', 'services'=>['AAAA','BBBB','CCCC']);
        return view('pages.service')->with($data);
    }

    public function contact(){
        $title = 'Contact Section';
        return view('pages.contact')->with('title', $title);
    }
}
