<?php

namespace App\Models;

use Illuminate\Databse\Eloquent\ModelNotFoundException;

class Post
{
    public static function all()
    {
        return File    //::files(resource_path("posts/"));
    }
    public static function find($slug)
    {
        if (! file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        //dd('File does not existt!');
        }

        return cache()->remember("posts.{$slug}", 3600, fn() => file_get_contents($path));
    
        //var_dump('file_ger_contents');    
        //return view('post', ['post' => $post]);
    }

}