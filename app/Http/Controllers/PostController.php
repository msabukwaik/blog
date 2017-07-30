<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function show($postId){
    	$posts = DB::select('select * from posts where id = :id', ['id' => $postId]);
        return view('posts.show', ['posts'=>$posts]);
    }
}
