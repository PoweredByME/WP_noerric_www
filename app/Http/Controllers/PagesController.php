<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class PagesController extends Controller
{
    public function index(){
        $carousel_text = json_decode(File::get(storage_path("app_content_data/carousel_text.JSON")));
        $navbar_link_data = json_decode(File::get(storage_path("app_content_data/navbar_link_data.JSON")));
        $about_us_data =  json_decode(File::get(storage_path("app_content_data/about_us_data.JSON")));

        $data = array(
            'page_tab_title' => 'Welcome',
            'carousel_data' => $carousel_text->content,
            'navbar_link_data' => $navbar_link_data->index,
            'about_us_data' => $about_us_data
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