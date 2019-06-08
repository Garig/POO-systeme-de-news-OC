<?php
function autoload($classname)
{
  if (file_exists($file = __DIR__ . '/' . $classname . '.class.php'))
  {
    require $file;
  }
}

spl_autoload_register('autoload');