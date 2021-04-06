<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Feet extends AbstractOption {

  function __construct () {
    $this->values = [ 'boots', 'feet' ];
    $this->setValue($this->values[0]);
  }
  
}

?>