<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Hands extends AbstractOption {

  function __construct () {
    $this->values = [ 'gloves', 'hands' ];
    $this->setValue($this->values[0]);
  }
  
}

?>