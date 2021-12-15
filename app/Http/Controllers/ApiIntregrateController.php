<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiIntregrateController extends Controller
{
    public function showAllPost(){
        $allPosts=Http::get('https://jsonplaceholder.typicode.com/posts');
        return $allPosts->json();
    }

    public function showSinglePost($id){
    
        $singlePosts=Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $singlePosts->json();
    }

    public function addPost(){
    
        $addPostData=Http::post('https://jsonplaceholder.typicode.com/posts/',
            [
                'userId'=>'150',
                'title'=>'First Post',
                'body'=>'Some Body Text'
            ]);
        return $addPostData->json();
    }
    
    public function editPost($id){
    
        $editPostData=Http::put('https://jsonplaceholder.typicode.com/posts/'.$id, [
                'userId'=>'150',
                'title'=>'Update Post',
                'body'=>'Updat Some Body Text'
            ]);
        return $editPostData->json();
    }
    public function deletePost($id){
    
        $deletePostData=Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $deletePostData->json();
    }
}
