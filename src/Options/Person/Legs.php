<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Legs extends AbstractOption {

  function __construct () {
    $this->values = [ 'pants' ];
    $this->setValue($this->values[0]);
  }
  
}

?>