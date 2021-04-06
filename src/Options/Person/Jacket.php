<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Jacket extends AbstractOption {

  function __construct () {
    $this->values = [ 'jacket' ];
    $this->setValue($this->values[0]);
  }
  
}

?>