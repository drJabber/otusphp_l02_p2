<?php
/**
 * Created by PhpStorm.
 * User: djabber
 * Date: 22.12.20
 * Time: 18:59
 */

require_once __DIR__ . "/vendor/autoload.php";

$test_path = readline();

if (file_exists($test_path)){
  $content = file_get_contents($test_path);
  $br = new djabber\bracketer();
  if ($br->check($content)){
      echo "YEEEEES";
  }else{
      echo "BAAAAD";
    }

}else{
    echo "BAD FIIIIIILE";
}
