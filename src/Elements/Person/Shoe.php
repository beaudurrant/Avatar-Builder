<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Shoe extends AbstractColor implements IDrawable {

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
    $color = 'shoe';
    if ($options['feet']->getValue() == 'feet') $color = 'skin';
    if ($options['gender']->getValue() == 'male') {
      // left
      $lines[] = new Line(9, 21, 3, $color);
      $lines[] = new Line(8, 22, 4, $color);
      $lines[] = new Line(8, 23, 4, $color);
      // right
      $lines[] = new Line(13, 21, 3, $color);
      $lines[] = new Line(13, 22, 4, $color);
      $lines[] = new Line(13, 23, 4, $color);
    } else {
      // left
      $lines[] = new Line(10, 21, 2, $color);
      $lines[] = new Line(9, 22, 3, $color);
      $lines[] = new Line(9, 23, 3, $color);
      // right
      $lines[] = new Line(13, 21, 2, $color);
      $lines[] = new Line(13, 22, 3, $color);
      $lines[] = new Line(13, 23, 3, $color);
    }
    return $lines;
  }
  
}

?>