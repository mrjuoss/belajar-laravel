<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
    //  \DB::enableQueryLog(); -> Untuk debugging
    // Cara biasa
    // $posts = Post::orderBy('created_at', 'desc')->get();
    // Cara luar biasa (Menggunakan Scope) Ex nama scope adalah dataTerakhir
    // Maka buatlah method di Model terkait dengan nama scope+NamaScope => scopeDataTerakhir
    // $posts = Post::dataTerakhir()->get();
      $posts = Post::dataTerakhir()->paginate(3);
    //  view('posts.index', compact('posts'))->render();
    return view('posts.index', compact('posts'));
    //  dd(\DB::getQueryLog());
    }
}
