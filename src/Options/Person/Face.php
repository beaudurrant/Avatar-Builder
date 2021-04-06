<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Face extends AbstractOption {

  function __construct () {
    $this->values = [ 'face', 'hanky', 'beard', 'goatee', 'mustache' ];
    $this->setValue($this->values[0]);
  }
  
}

?>