<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Belt extends AbstractColor implements IDrawable {
  
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
    if ($options['body']->getValue() == 'suspenders') {
      $lines[] = new Line(10, 12, 1, 'belt');
      $lines[] = new Line(10, 13, 1, 'belt');
      $lines[] = new Line(10, 14, 1, 'belt');
      $lines[] = new Line(10, 15, 1, 'belt');
      $lines[] = new Line(10, 16, 1, 'belt');
      $lines[] = new Line(10, 17, 1, 'belt');
      $lines[] = new Line(10, 18, 1, 'belt');
      $lines[] = new Line(14, 12, 1, 'belt');
      $lines[] = new Line(14, 13, 1, 'belt');
      $lines[] = new Line(14, 14, 1, 'belt');
      $lines[] = new Line(14, 15, 1, 'belt');
      $lines[] = new Line(14, 16, 1, 'belt');
      $lines[] = new Line(14, 17, 1, 'belt');
      $lines[] = new Line(14, 18, 1, 'belt');
    }
    if ($options['body']->getValue() == 'backpack') {
      if ($options['gender']->getValue() == 'male') {
        $lines[] = new Line(9, 13, 1, 'belt');
        $lines[] = new Line(9, 14, 1, 'belt');
        $lines[] = new Line(15, 13, 1, 'belt');
        $lines[] = new Line(15, 14, 1, 'belt');
        $lines[] = new Line(8, 15, 2, 'belt');
        $lines[] = new Line(8, 16, 1, 'belt');
        $lines[] = new Line(15, 15, 2, 'belt');
        $lines[] = new Line(16, 16, 1, 'belt');
        $lines[] = new Line(8, 12, 2, 'belt');
        $lines[] = new Line(15, 12, 2, 'belt');
      } else {
        $lines[] = new Line(9, 13, 1, 'belt');
        $lines[] = new Line(9, 14, 1, 'belt');
        $lines[] = new Line(15, 13, 1, 'belt');
        $lines[] = new Line(15, 14, 1, 'belt');
        $lines[] = new Line(9, 15, 1, 'belt');
        $lines[] = new Line(15, 15, 1, 'belt');
        $lines[] = new Line(9, 12, 1, 'belt');
        $lines[] = new Line(15, 12, 1, 'belt');
      }
    }
    $color = 'belt';
    if ($options['body']->getValue() == 'body') $color = 'pants';
    if ($options['gender']->getValue() == 'male') {
      $lines[] = new Line(9, 18, 7, $color);
    } else {
      $lines[] = new Line(10, 18, 5, $color);
    }
    return $lines;
  }
  
}

?>