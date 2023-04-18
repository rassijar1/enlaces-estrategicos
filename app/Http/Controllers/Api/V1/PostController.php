<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\V1\PostResource;
use App\Http\Resources\V1\PostCollection;
Use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index(){

   
		//return response()->json("Inicio Post");
    	//return PostResource::collection(Post::all());
    	return new PostCollection(Post::all());
//return new PostCollection(Post::select('*')->join('users', 'posts.id_post_fk', '=', 'users.id')->get());

    	//select('users.*')->join('posts', 'posts.id_post_fk', '=', 'users.id')->get()

    }

     public function show(Post $post){


    	return new PostResource($post);




    }

    public function store(StorePostRequest $request){

    	Post::create($request->validated());
    	return response()->json("Post creado");


    }

    public function update(StorePostRequest $request, Post $post){

    	$post->update($request->validated());
    	 return response()->json("Post actualizado");


    }

    public function destroy(Post $post){


    	$post->delete();
    	 return response()->json("Post Eliminado");

    }



}
