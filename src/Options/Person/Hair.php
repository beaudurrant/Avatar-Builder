<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Hair extends AbstractOption {

  function __construct () {
    $this->values = [ 'short', 'long', 'bald' ];
    $this->setValue($this->values[0]);
  }
  
}

?>