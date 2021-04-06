<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\Line;

class Helmet implements IDrawable {
  
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
    if ($options['head']->getValue() == 'helmet') {
      $lines[] = new Line(8, 1, 9, 'head');
      $lines[] = new Line(7, 2, 11, 'head');
      $lines[] = new Line(7, 3, 11, 'head');
      $lines[] = new Line(6, 4, 13, 'head');
      $lines[] = new Line(6, 5, 3, 'head');
      $lines[] = new Line(16, 5, 3, 'head');
      $lines[] = new Line(7, 6, 2, 'head');
      $lines[] = new Line(16, 6, 2, 'head');
    }
    if ($options['head']->getValue() == 'touque') {
      $lines[] = new Line(8, 3, 9, 'head');
      $lines[] = new Line(7, 4, 11, 'head');
      $lines[] = new Line(7, 5, 2, 'head');
      $lines[] = new Line(16, 5, 2, 'head');
      $lines[] = new Line(7, 6, 2, 'head');
      $lines[] = new Line(16, 6, 2, 'head');
    }
    return $lines;
  }
  
}

?>