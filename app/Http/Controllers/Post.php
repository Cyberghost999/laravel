<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Post extends Controller
{
    public function allPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function getPostbyID($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/' . $id);
        return $post->json();
    }
    public function addPost(){
        $post = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => 1,
            'title' => 'A good json file',
            'body' => 'should look like this'
        
        ]);
        return $post->json();
    }
    public function update(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'A good json file',
            'body' => 'should look like this'
        ]);
        return $response->json();
    }
    public function delete($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'. $id);
        return $response->json();
    }
}
