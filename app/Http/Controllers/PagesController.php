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
        $aboutProject = json_decode(File::get(storage_path("app_content_data/about_project.JSON")));
        $aboutTeam = json_decode(File::get(storage_path("app_content_data/about_team.JSON")));
        $footer = json_decode(File::get(storage_path("app_content_data/footer_data.JSON")));        
        $socialMedia = json_decode(File::get(storage_path("app_content_data/social_media.JSON")));        

        $data = array(
            'page_tab_title' => 'Welcome',
            'carousel_data' => $carousel_text->content,
            'navbar_link_data' => $navbar_link_data->index,
            'about_us_data' => $about_us_data,
            'aboutProjectParallax_img' => $aboutProject->parallax,
            'aboutTeamParallax_img' => $aboutTeam->parallax,
            'aboutProject_less_text' => $aboutProject->text->less_text,
            'aboutTeam_less_text' => $aboutTeam->text->less_text,
            'aboutTeam_img' => $aboutTeam->img, // list of images of the team
            'aboutTeam_less_text' => $aboutTeam->text->less_text,
            'footer' => $footer,
            'social_media' => $socialMedia->links
        ); 
        return view('Pages.index')->with($data);
    }
    
    public function about(){
        $data = array(
            'page_tab_title' => 'About Us',
        );
        return view('Pages.about')->with($data);
    }

    public function team(){
        $data = array(
            'page_tab_title' => 'About Us',
        );
        return view('Pages.team')->with($data);
    }
}

?>