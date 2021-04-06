<?php

namespace AvatarBuilder;

class Skiier extends Person {
  
  /**
   * Skiier
   * 
   * @param int $width (optional)
   * @param int $height (optional)
   */
  function __construct (int $width = null, int $height = null) {
    parent::__construct($width, $height);
    $this->options['skis'] = new Options\Person\Skiier\Skis();
    $this->elements['skis'] = new Elements\Person\Skiier\Skis();
  }

}

?>