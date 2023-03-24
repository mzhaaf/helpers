<?php

namespace Mzhaaf\Helpers;

use DB;

class Data
{
  public static function getDimension($length, $depth, $height) {
    
    $dimensions = [];

    if(!empty($length)) array_push($dimensions, "W" . $length);
    if(!empty($depth)) array_push($dimensions, "D" . $depth);
    if(!empty($height)) array_push($dimensions, "H" . $height);
    $str_dimensions = implode(" x ", $dimensions);

    return $str_dimensions;

  }
}