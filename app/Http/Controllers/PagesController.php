<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = array(
            'page_tab_title' => 'Welcome',
            'title' => 'This is Index Page'
        );
        return view('Pages.index')->with($data);
    }
    
    public function about(){
        $data = array(
            'page_tab_title' => 'About Us',
            'title' => 'This is About Page',
            'services' => ['Saad', 'Abdullah', 'Zain']
        );
        return view('Pages.about')->with($data);
    }
}

?>