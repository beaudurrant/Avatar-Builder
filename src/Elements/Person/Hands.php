<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Hands extends AbstractColor implements IDrawable {
  
  function __construct () {
    $this->setColor('153_153_102');
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
    $color = 'hands';
    if ($options['hands']->getValue() == 'hands') $color = 'skin';
    $lines[] = new Line(19, 15, 2, $color);
    $lines[] = new Line(18, 16, 4, $color);
    $lines[] = new Line(19, 17, 2, $color);
    $lines[] = new Line(4, 15, 2, $color);
    $lines[] = new Line(3, 16, 4, $color);
    $lines[] = new Line(4, 17, 2, $color);
    return $lines;
  }
  
}

?>