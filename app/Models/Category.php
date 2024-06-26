<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;
    private static $image;
    private static $imageName;
    private static $ImageUrl;
    private static $directory;

    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName= self::$image->getClientOriginalName();
        self::$directory= 'category-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newCategory($request){
        self::$category=new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->image = self::getImageUrl($request);
        self::$category->save();
    }
}
