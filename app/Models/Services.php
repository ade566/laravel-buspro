<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
  use HasFactory;

  protected $table = 'services';

  protected $appends = ['file_image'];

  function getFileImageAttribute(){
    return env('BE_URL') . $this->file;
  }

  static function getData(){
    $collection = Services::limit(9)->orderBy('id', 'desc')->get();
    return $collection;
  }

  static function getCollection($req = []){
    $data = Services::orderBy('id', 'desc');
    $result = $data->paginate(100)->appends(request()->except('page'));
    $result->getCollection()->transform(function ($item) {
      return $item;
    });
    return $result;
  }
}
