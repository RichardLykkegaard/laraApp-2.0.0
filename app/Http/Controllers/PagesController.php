<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Controls the content of views
class PagesController extends Controller
{
   public function index(){
       return view('pages.index');
   }
    public function about(){
        return view('pages.about');
    }
    public function register(){
        return view('pages.register');
    }
    public function login(){
        return view('pages.login');
    }

        public function pages(){
        return view('backend.pages');
    }

        public function create(){
        return view('backend.create');
    }

        public function edit(){
        return view('backend.edit');
    }
            public function delete(){
        return view('backend.delete');
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' =>['HTML','CSS','PhP', 'Bootstrap', 'Shopify', 'NEW! Laravel']
        );

        return view('pages.services')->with($data);
    }
    
   /* public function create() {
        $data = array(
            'title' =>  ['Home','Blog','Blog Post', 'Media', 'About', 'Contact', 'FAQ', 'Characters', ]
            
            'uri' =>    ['/','/arhive','/article/{id}','/media','/about','/contact','/FAQ', '/Characters',]
            
            'name' =>   ['None','blog.index','blog.post','None','None','None','None','None',]
            
            'template' =>['home','blog','blog.post','None','None','None','None','None',]
            
            'edit' => ['','','','','','','','',]
            'delete' =>['','','','','','','','','',]
            

        );
    } */
}
