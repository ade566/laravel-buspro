<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\ChooseUs;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Models\Configuration;

class PageController extends Controller
{
  function index(){
    $data = [
      'sliders' => Slider::getData(),
      'configuration' => Configuration::orderBy('id', 'desc')->first(),
      'chooseus' => ChooseUs::getData(),
      'services' => Services::getData(),
      'blogs' => Blog::getData(),
    ];

    return view('dashboard', $data);
  }

  function blog(){
    return view('blog');
  }

  function aboutUs(){
    return view('about-us');
  }

  function blogDetail($id){
    return view('blog-detail');
  }

  function service(){
    return view('service');
  }

  function serviceDetail($id){
    return view('service-detail');
  }
  
  function contact(){
    return view('contact');
  }

  function project(){
    return view('project');
  }

}
