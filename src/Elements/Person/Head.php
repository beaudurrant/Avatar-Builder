<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Head extends AbstractColor implements IDrawable {

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
    $lines[] = new Line(8, 6, 9, 'skin');
    $lines[] = new Line(8, 7, 9, 'skin');
    $lines[] = new Line(8, 8, 9, 'skin');
    $lines[] = new Line(8, 5, 9, 'skin');
    $lines[] = new Line(8, 8, 9, 'skin');
    $lines[] = new Line(8, 9, 9, 'skin');
    $lines[] = new Line(9, 10, 7, 'skin');
    $lines[] = new Line(10, 11, 5, 'skin');
    return $lines;
  }
  
}

?>