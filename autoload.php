<?php

spl_autoload_register('AutoLoader');
function AutoLoader ($class) {
  $file = str_replace('\\', DIRECTORY_SEPARATOR, $class);
  $file = str_replace('AvatarBuilder' . DIRECTORY_SEPARATOR, '', $file);
  require_once '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $file . '.php';
}
	
?>