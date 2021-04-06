<?php

namespace AvatarBuilder\Options\Person\Snowboarder;

use AvatarBuilder\Options\AbstractOption;

class Rider extends AbstractOption {

  function __construct () {
    $this->values = [ 'regular', 'goofy' ];
    $this->setValue($this->values[0]);
  }
  
}

?>