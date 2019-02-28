<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class HomeController extends Controller
{

  public function index(){

    $posts = Post::all();
    return view('home', compact('posts'));
  }

  public function show(Post $post)
  {

    if (empty($post)) {
      abort(404);
    }
      return view('show', compact('post'));
  }


}
