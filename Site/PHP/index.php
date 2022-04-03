<?php 
ini_set('display_errors', 1);
// Redirect to router
class File{

    public static function build_path($path_array) {
      $DS = DIRECTORY_SEPARATOR;
      $ROOT_FOLDER = __DIR__;
      return $ROOT_FOLDER. $DS . join($DS, $path_array);
    }
  
  }
include_once File::build_path(array("assets","Script","Debug.php"));
require_once File::build_path(array("Controler", "router.php"));
