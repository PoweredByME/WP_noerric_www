<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class PagesController extends Controller
{
    public function index(){
        $carousel_text_json = File::get(storage_path("app_content_data/carousel_text.JSON"));
        $carousel_text = json_decode($carousel_text_json);
        $data = array(
            'page_tab_title' => 'Welcome',
            'carousel_data' => $carousel_text->content
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