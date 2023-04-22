<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
	public function func(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
	{
		    return $post->get();//$postの中身を戻り値にする。
	}
	public function index(Post $post){
		return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
	}
	public function show(Post $post)
	{
		return view('posts/show')->with(['post'=>$post]);
	}
	public function create(Request $request)
	{
		return view('posts.create');
	}
	
	public function store(Request $request, Post $post)
	{
		$input = $request['post'];
		
		$post->fill($input)->save();
		return redirect('/posts/' . $post->id);
	}
}
