<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Jacket extends AbstractColor implements IDrawable {

  function __construct () {
    $this->setColor('51_51_0');
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
    $color = 'jacket';
    if ($options['jacket']->getValue() == 'bodyColor') $color = 'skin';
    if ($options['gender']->getValue() == 'male') {
      // jacket
      $lines[] = new Line(8, 12, 9, $color);
      $lines[] = new Line(6, 13, 13, $color);
      $lines[] = new Line(5, 14, 15, $color);
      // body
      $lines[] = new Line(9, 15, 7, $color);
      $lines[] = new Line(9, 16, 7, $color);
      $lines[] = new Line(9, 17, 7, $color);
    } else {
      // jacket
      $lines[] = new Line(9, 12, 7, $color);
      $lines[] = new Line(6, 13, 13, $color);
      $lines[] = new Line(5, 14, 15, $color);
      // body
      $lines[] = new Line(10, 15, 5, $color);
      $lines[] = new Line(10, 16, 5, $color);
      $lines[] = new Line(10, 17, 5, $color);
    }
    // left arm
    $lines[] = new Line(6, 15, 1, $color);
    // right arm
    $lines[] = new Line(18, 15, 1, $color);
    return $lines;
  }
  
}

?>