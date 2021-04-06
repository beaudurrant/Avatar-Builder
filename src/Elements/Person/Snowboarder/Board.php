<?php

namespace AvatarBuilder\Elements\Person\Snowboarder;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Board extends AbstractColor implements IDrawable {
  
  function __construct () {
    $this->setColor('151_21_21');
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
    if ($options['rider']->getValue() == 'regular') $start = 4;
    else $start = 19;
    // set lines based on options
    if ($options['snowboard']->getValue() == 'park') {
      $lines[] = new Line(($start), 11, 2, 'board');
      $lines[] = new Line(($start - 1), 12, 4, 'board');
      $lines[] = new Line(($start - 2), 13, 6, 'board');
      $lines[] = new Line(($start - 2), 14, 6, 'board');
      $lines[] = new Line(($start - 2), 15, 6, 'board');
      $lines[] = new Line(($start - 2), 16, 6, 'board');
      $lines[] = new Line(($start - 2), 17, 6, 'board');
      $lines[] = new Line(($start - 2), 18, 6, 'board');
      $lines[] = new Line(($start - 2), 19, 6, 'board');
      $lines[] = new Line(($start - 2), 20, 6, 'board');
      $lines[] = new Line(($start - 2), 21, 6, 'board');
      $lines[] = new Line(($start - 1), 22, 4, 'board');
      $lines[] = new Line(($start), 23, 2, 'board');
    }
    if ($options['snowboard']->getValue() == 'powder') {
      $lines[] = new Line(($start), 11, 2, 'board');
      $lines[] = new Line(($start - 1), 12, 4, 'board');
      $lines[] = new Line(($start - 2), 13, 6, 'board');
      $lines[] = new Line(($start - 2), 14, 6, 'board');
      $lines[] = new Line(($start - 2), 15, 6, 'board');
      $lines[] = new Line(($start - 2), 16, 6, 'board');
      $lines[] = new Line(($start - 2), 17, 6, 'board');
      $lines[] = new Line(($start - 2), 18, 6, 'board');
      $lines[] = new Line(($start - 2), 19, 6, 'board');
      $lines[] = new Line(($start - 2), 20, 6, 'board');
      $lines[] = new Line(($start - 2), 21, 6, 'board');
      $lines[] = new Line(($start - 2), 22, 2, 'board');
      $lines[] = new Line(($start - 2), 23, 1, 'board');
      $lines[] = new Line(($start + 2), 22, 2, 'board');
      $lines[] = new Line(($start + 3), 23, 1, 'board');
    }
    if ($options['snowboard']->getValue() == 'mountain') {
      $lines[] = new Line(($start), 11, 2, 'board');
      $lines[] = new Line(($start - 1), 12, 4, 'board');
      $lines[] = new Line(($start - 2), 13, 6, 'board');
      $lines[] = new Line(($start - 2), 14, 6, 'board');
      $lines[] = new Line(($start - 2), 15, 6, 'board');
      $lines[] = new Line(($start - 2), 16, 6, 'board');
      $lines[] = new Line(($start - 2), 17, 6, 'board');
      $lines[] = new Line(($start - 2), 18, 6, 'board');
      $lines[] = new Line(($start - 2), 19, 6, 'board');
      $lines[] = new Line(($start - 2), 20, 6, 'board');
      $lines[] = new Line(($start - 2), 21, 6, 'board');
      $lines[] = new Line(($start - 2), 22, 6, 'board');
      $lines[] = new Line(($start - 1), 23, 4, 'board');
    }
    return $lines;
  }
  
}

?>