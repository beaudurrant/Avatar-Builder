<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Pants extends AbstractColor implements IDrawable {

  function __construct () {
    $this->setColor('102_51_0');
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
    $color = 'pants';
    if ($options['legs']->getValue() == 'legs') $color = 'skin';
    if ($options['gender']->getValue() == 'male') {
      $lines[] = new Line(9, 19, 7, $color);
      $lines[] = new Line(9, 20, 3, $color);
      $lines[] = new Line(13, 20, 3, $color);
    } else {
      $lines[] = new Line(10, 19, 5, $color);
      $lines[] = new Line(10, 20, 2, $color);
      $lines[] = new Line(13, 20, 2, $color);
    }
    if ($options['legs']->getValue() == 'legs') $lines[] = new Line(12, 19, 1, $color);
    return $lines;
  }
  
}

?>