<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Eyes extends AbstractOption {

  function __construct () {
    $this->values = [ 'eyes', 'glasses', 'goggles' ];
    $this->setValue($this->values[0]);
  }
  
}

?>