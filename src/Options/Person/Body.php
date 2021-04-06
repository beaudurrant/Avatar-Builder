<?php

namespace AvatarBuilder\Options\Person;

use AvatarBuilder\Options\AbstractOption;

class Body extends AbstractOption {

  function __construct () {
    $this->values = [ 'belt', 'body', 'suspenders', 'backpack' ];
    $this->setValue($this->values[0]);
  }
  
}

?>