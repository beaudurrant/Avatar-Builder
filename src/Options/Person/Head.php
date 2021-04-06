<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Head extends AbstractOption {

  function __construct () {
    $this->values = [ 'helmet', 'touque', 'none' ];
    $this->setValue($this->values[0]);
  }
  
}

?>