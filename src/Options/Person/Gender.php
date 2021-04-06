<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Gender extends AbstractOption {

  function __construct () {
    $this->values = [ 'male', 'female' ];
    $this->setValue($this->values[0]);
  }
  
}

?>