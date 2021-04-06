<?php

session_start();

require_once '..' . DIRECTORY_SEPARATOR . 'autoload.php';

switch($_REQUEST['class'] ?? 'person') {
  case 'snowboarder':
    $avatar = new AvatarBuilder\Snowboarder();
    break;
  case 'skiier':
    $avatar = new AvatarBuilder\Skiier();
    break;
  default :
    $avatar = new AvatarBuilder\Person();
    break;
}

$avatar->setOptions($_REQUEST, $_SESSION);
$avatar->display();

?>