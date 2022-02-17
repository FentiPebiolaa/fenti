<?php

namespace App\Models;

class about 
{
    private static $about_post = [
               [

                    "title"  => "judul tulisan pertama",
                    "slug"   => "judul-post-pertama",
                    "author" => "fenti",
                    "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
               ],
               [
                    "title"  => "judul tulisan kedua",
                    "slug"   => "judul-post-kedua",
                    "author" => "pebiola",
                    "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum."


               ],
          ];

    public static function all()
    {
        return collect(self::$about_post);
    }  

    public static function find($slug)
    {
        $about = static::all();
        

        return  $about -> firstwhere('slug', $slug ); 
    }
       
}
