<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
	public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
	{
		    return $post->get();//$postの中身を戻り値にする。
	}
	public function func(){
		$post = Post::latest()->take(10)->paginate(5);
		return view('posts.index', ["post" => $post]);
	}
}
