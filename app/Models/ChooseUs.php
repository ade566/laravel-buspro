<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChooseUs extends Model
{
  use HasFactory;

  protected $table = 'choose_us';

  protected $appends = ['file_image'];

  function getFileImageAttribute(){
    return env('BE_URL') . $this->file;
  }

  static function getData(){
    $collection = ChooseUs::orderBy('id', 'desc')->get();
    return $collection;
  }
}
