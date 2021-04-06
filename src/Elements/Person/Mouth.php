<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Mouth extends AbstractColor implements IDrawable {

  function __construct () {
    $this->setColor('1_1_1');
  }
  
  /**
   * Gets lines to draw this element
   *
   * @param array &$options
   *
   * @return array
   */
  public function getLines (array &$options) : array {
    $lines = [];
    if ($options['gender']->getValue() == 'female') $this->setColor('204_0_0');
    $lines[] = new Line(12, 10, 1, 'mouth');
    return $lines;
  }
  
}

?>