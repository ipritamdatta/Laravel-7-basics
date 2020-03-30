<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// ayeza khan
class ClientController extends Controller
{
    // index
    public function getAllPosts(){
        $response = Http::get("https://jsonplaceholder.typicode.com/posts");
        return $response->json();
    }

    // show
    public function getPostById($id){
        $response = Http::get("https://jsonplaceholder.typicode.com/posts/".$id);
        return $response->json();
    }

    //store
    public function addPost(){
        $response = Http::post("https://jsonplaceholder.typicode.com/posts",[
            'userId'=>1,
            'title'=>'new post name',
            'body' =>'new post description'
        ]);
        return $response->json();
    }

    // update
    public function updatePost(){
        $response = Http::put("https://jsonplaceholder.typicode.com/posts/1",[
            'title'=>'updated post title',
            'body' =>'updated post description'
        ]);

        return $response->json();
    }

    // delete
    public function deletePost($id){
        $response = Http::delete("https://jsonplaceholder.typicode.com/posts/".$id);
        return $response->json();
    }
}
