<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function blogPost($id,$welcome = 1){
        $pages = [
            $id => [
                'title' => ' from page '.$id
            ]
        ];
        $welcomes = [1 => 'Welcome to ', 2 => 'Hello to '];
        return view('blog-post', ['data' => $pages[$id], 'welcome' => $welcomes[$welcome]]);
    }
}
