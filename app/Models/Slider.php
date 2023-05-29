<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  use HasFactory;

  protected $table = 'sliders';

  protected $appends = ['file_image'];

  function getFileImageAttribute(){
    return env('BE_URL') . $this->file;
  }

  static function getData(){
    $collection = Slider::orderBy('id', 'desc')->get();
    return $collection;
  }
}
