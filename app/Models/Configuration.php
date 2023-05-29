<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
  use HasFactory;

  protected $table = 'configurations';

  protected $appends = ['file_logo', 'file_icon'];

  function getFileLogoAttribute(){
    return env('BE_URL') . $this->logo;
  }

  function getFileIconAttribute(){
    return env('BE_URL') . $this->icon;
  }
}
