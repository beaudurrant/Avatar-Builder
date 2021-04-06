<?php

namespace AvatarBuilder\Options\Person\Skiier;

use AvatarBuilder\Options\AbstractOption;

class Skis extends AbstractOption {

  function __construct () {
    $this->values = [ 'regular', 'switch' ];
    $this->setValue($this->values[0]);
  }
  
}

?>