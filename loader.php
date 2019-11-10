<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 11.03.19
 * Time: 20:54
 */

/**
 * Classloader auf dem root-Pfad
 */
spl_autoload_register(static function ($class_name) {

  $class_file = str_replace(
      '\\',
      '/',
      __DIR__ . DIRECTORY_SEPARATOR . $class_name . '.php'
  );

  if (!file_exists($class_file)) {
    return FALSE;
  }

  require_once $class_file;

  return TRUE;

});