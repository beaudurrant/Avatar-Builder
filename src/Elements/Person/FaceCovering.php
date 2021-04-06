<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\Line;

class FaceCovering implements IDrawable {
  
  function __construct () {}
  
  /**
   * Gets lines to draw this element
   *
   * @param array &$options
   *
   * @return array
   */
  public function getLines (array &$options) : array {
    $lines = [];
    if ($options['gender']->getValue() == 'male') {
      if ($options['face']->getValue() == 'beard') {
        $lines[] = new Line(9, 9, 7, 'hair');
        $lines[] = new Line(9, 10, 7, 'hair');
        $lines[] = new Line(10, 11, 5, 'hair');
        $lines[] = new Line(11, 12, 3, 'hair');
        $lines[] = new Line(12, 13, 1, 'hair');
      }
      if ($options['face']->getValue() == 'mustache') {
        $lines[] = new Line(11, 9, 3, 'hair');
      }
      if ($options['face']->getValue() == 'goatee') {
        $lines[] = new Line(11, 9, 3, 'hair');
        $lines[] = new Line(11, 10, 3, 'hair');
        $lines[] = new Line(11, 11, 1, 'hair');
        $lines[] = new Line(11, 12, 1, 'hair');
        $lines[] = new Line(13, 11, 1, 'hair');
        $lines[] = new Line(13, 12, 1, 'hair');
      }
    }
    if ($options['face']->getValue() == 'hanky') {
      $lines[] = new Line(8, 9, 9, 'head');
      $lines[] = new Line(9, 10, 7, 'head');
      $lines[] = new Line(10, 11, 5, 'head');
    }
    return $lines;
  }
  
}

?>