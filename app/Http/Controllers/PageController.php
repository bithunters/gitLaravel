<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{

	public function getIndex(){

		$posts = Post::orderBy('created_at')->limit(10)->get();
		return view('pages.welcome')->withPosts($posts);

		}

	public function getAbout(){

		return view('pages.about');

		}

	public function getContact(){

		return view('pages.contact');

		}

	}
    
