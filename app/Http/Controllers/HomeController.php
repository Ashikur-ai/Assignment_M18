<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function deletePost(Request $request){
        $id = $request->id;
        $post = Post::find($id);

        $post->delete();
    }


    public function findPost(Request $request){
        $id = $request->id;

        $posts = Post::all();
        $desired_posts = [];
        foreach ($posts as $post) {
            if($post['category_id']==$id){
                $desired_posts = $post;
            }
        }

        return $desired_posts;
    }
}
