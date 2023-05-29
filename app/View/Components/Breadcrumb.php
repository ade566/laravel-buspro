<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{

  public $title;
  public $urls;

  public function __construct($title, $urls = [])
  {
    $this->title = $title;
    $this->urls = $urls;
  }

  public function render(): View|Closure|string
  {
    return view('components.breadcrumb');
  }
}
