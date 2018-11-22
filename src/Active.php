<?php
namespace Thanhtut\EasyActive;
use Illuminate\Support\Facades\Route;

class Active
{
	
   	public static function is_active($string_url)
    {
      $current_url    = Route::getFacadeRoot()->current()->uri();
      $active_value   = config('config.active_class');
      $inactive_value = config('config.inactive_class');
      
      $result = ($current_url == $string_url) ? $active_value : $inactive_value;

      return $result;
    }
}