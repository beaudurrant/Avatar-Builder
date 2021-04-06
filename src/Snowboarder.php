<?php

namespace AvatarBuilder;

class Snowboarder extends Person {
  
  /**
   * Snowboarder
   * 
   * @param int $width (optional)
   * @param int $height (optional)
   */
  function __construct (int $width = null, int $height = null) {
    parent::__construct($width, $height);
    $this->options['snowboard'] = new Options\Person\Snowboarder\Snowboard();
    $this->options['rider'] = new Options\Person\Snowboarder\Rider();
    $this->elements['board'] = new Elements\Person\Snowboarder\Board();
  }

}

?>