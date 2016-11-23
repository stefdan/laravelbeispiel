<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Post;


class PostController extends BaseController {
	public function index() {
		// return 'Hallo Welt!';
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
	}
}