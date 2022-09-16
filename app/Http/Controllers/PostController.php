<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Models\User;

class PostController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = "in $category->name";
        }

        if(Request('user')){
            $user = User::firstWhere('username', request('user'));
            $title = "by $user->name";
        }
        return view('posts', [
            "title" => "All Posts $title",
            "posts" => PostModel::latest()->filter(request(['search', 'category', 'user']))->paginate(4)->withQueryString()
        ]);
    }

    public function show(PostModel $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
