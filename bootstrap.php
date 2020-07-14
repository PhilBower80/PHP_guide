<?php
// send errors to output
ini_set('display_errors', 1);

// autoload classes
spl_autoload_register(function ($class){
  $classPath = str_replace('\\', '/', $class);
  include __DIR__.'/src/'.$classPath.'.php';
});

