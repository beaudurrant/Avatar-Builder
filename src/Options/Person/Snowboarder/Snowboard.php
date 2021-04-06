<?php

namespace AvatarBuilder\Options\Person\Snowboarder;

use AvatarBuilder\Options\AbstractOption;

class Snowboard extends AbstractOption {

  function __construct () {
    $this->values = [ 'park', 'mountain', 'powder' ];
    $this->setValue($this->values[0]);
  }
  
}

?>