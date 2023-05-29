<?php

namespace App\View\Components;

use Closure;
use App\Models\Configuration;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Layout extends Component
{
  /**
   * Create a new component instance.
   */
  public function __construct()
  {
    //
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.layout', [
      'configuration' => Configuration::orderBy('id', 'desc')->first()
    ]);
  }
}
