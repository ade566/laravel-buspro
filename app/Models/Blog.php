<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  use HasFactory;

  protected $table = 'blogs';

  protected $appends = ['file_image'];

  function getFileImageAttribute(){
    return env('BE_URL') . $this->file;
  }

  static function getData(){
    $collection = Blog::with('category')->limit(3)->orderBy('id', 'desc')->get();
    return $collection;
  }

  static function getCollection($req = []){
    $data = Blog::with('category')->orderBy('id', 'desc');
    $result = $data->paginate(100)->appends(request()->except('page'));
    $result->getCollection()->transform(function ($item) {
      return $item;
    });
    return $result;
  }

  function category(){
    return $this->belongsTo(Category::class, 'category_id');
  }
}