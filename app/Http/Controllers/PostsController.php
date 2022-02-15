<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index($id){
        $items = [
            "1" => "Apple",
            "2" => "Orange"
        ];
        $fruit = $items[$id];
        $data = [
            "fruit_name" => $fruit
        ];
        return view('posts.index',$data);
    }
}
