<?php

namespace AvatarBuilder\Elements\Person\Skiier;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Skis extends AbstractColor implements IDrawable {
  
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
    if ($options['skis']->getValue() == 'regular') $start = 3;
    else $start = 17;
    // left
    $lines[] = new Line($start + 1, 8, 1, 'skis');
    $lines[] = new Line($start, 9, 2, 'skis');
    $lines[] = new Line($start, 10, 2, 'skis');
    $lines[] = new Line($start, 11, 2, 'skis');
    $lines[] = new Line($start, 12, 2, 'skis');
    $lines[] = new Line($start, 13, 2, 'skis');
    $lines[] = new Line($start, 14, 2, 'skis');
    $lines[] = new Line($start, 15, 2, 'skis');
    $lines[] = new Line($start, 16, 2, 'skis');
    $lines[] = new Line($start, 17, 2, 'skis');
    $lines[] = new Line($start, 18, 2, 'skis');
    $lines[] = new Line($start, 19, 2, 'skis');
    $lines[] = new Line($start, 20, 2, 'skis');
    $lines[] = new Line($start, 21, 2, 'skis');
    $lines[] = new Line($start, 22, 2, 'skis');
    $lines[] = new Line($start + 1, 23, 1, 'skis');
    // right
    $lines[] = new Line($start + 3, 8, 1, 'skis');
    $lines[] = new Line($start + 3, 9, 2, 'skis');
    $lines[] = new Line($start + 3, 10, 2, 'skis');
    $lines[] = new Line($start + 3, 11, 2, 'skis');
    $lines[] = new Line($start + 3, 12, 2, 'skis');
    $lines[] = new Line($start + 3, 13, 2, 'skis');
    $lines[] = new Line($start + 3, 14, 2, 'skis');
    $lines[] = new Line($start + 3, 15, 2, 'skis');
    $lines[] = new Line($start + 3, 16, 2, 'skis');
    $lines[] = new Line($start + 3, 17, 2, 'skis');
    $lines[] = new Line($start + 3, 18, 2, 'skis');
    $lines[] = new Line($start + 3, 19, 2, 'skis');
    $lines[] = new Line($start + 3, 20, 2, 'skis');
    $lines[] = new Line($start + 3, 21, 2, 'skis');
    $lines[] = new Line($start + 3, 22, 2, 'skis');
    $lines[] = new Line($start + 3, 23, 1, 'skis');
    return $lines;
  }
  
}

?>