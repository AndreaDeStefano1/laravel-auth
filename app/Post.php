<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $compare_slug = Post::where('slug', $slug)->first();
        $counter = 1;
        while ($compare_slug) {
            $slug = Str::slug($string, '-');
            $slug .= '-' . $counter;
            $counter++;
            $compare_slug = Post::where('slug', $slug)->first();
        }
        return $slug;
    }
}
