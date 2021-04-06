<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Hair extends AbstractColor implements IDrawable {
  
  function __construct () {
    $this->setColor('218_220_9');
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
    if ($options['hair']->getValue() == 'bald') $lines[] = new Line(9, 4, 7, 'skin');
    // sideburns have to go over the face if a boy
    if ($options['hair']->getValue() == 'short') {
      $lines[] = new Line(10, 3, 1, 'hair');
      $lines[] = new Line(12, 3, 1, 'hair');
      $lines[] = new Line(15, 3, 1, 'hair');
      $lines[] = new Line(7, 4, 10, 'hair');
      if($options['gender']->getValue() == 'male') {
        $lines[] = new Line(8, 5, 1, 'hair');
        $lines[] = new Line(8, 6, 1, 'hair');
        $lines[] = new Line(8, 7, 1, 'hair');
        $lines[] = new Line(16, 5, 1, 'hair');
        $lines[] = new Line(16, 6, 1, 'hair');
        $lines[] = new Line(16, 7, 1, 'hair');
      }
    }
    if ($options['hair']->getValue() == 'long') {
      $lines[] = new Line(9, 3, 7, 'hair');
      $lines[] = new Line(8, 4, 9, 'hair');
      $lines[] = new Line(8, 5, 1, 'hair');
      $lines[] = new Line(16, 5, 1, 'hair');
      $lines[] = new Line(8, 6, 1, 'hair');
      $lines[] = new Line(16, 6, 1, 'hair');
      $lines[] = new Line(8, 7, 1, 'hair');
      $lines[] = new Line(16, 7, 1, 'hair');
      $lines[] = new Line(8, 8, 1, 'hair');
      $lines[] = new Line(16, 8, 1, 'hair');
      $lines[] = new Line(8, 9, 1, 'hair');
      $lines[] = new Line(16, 9, 1, 'hair');
      $lines[] = new Line(8, 10, 1, 'hair');
      $lines[] = new Line(16, 10, 1, 'hair');
      $lines[] = new Line(9, 11, 1, 'hair');
      $lines[] = new Line(15, 11, 1, 'hair');
      if($options['gender']->getValue() == 'male') {
        $lines[] = new Line(8, 5, 1, 'hair');
        $lines[] = new Line(8, 6, 1, 'hair');
        $lines[] = new Line(8, 7, 1, 'hair');
        $lines[] = new Line(16, 5, 1, 'hair');
        $lines[] = new Line(16, 6, 1, 'hair');
        $lines[] = new Line(16, 7, 1, 'hair');
      }
    }
    return $lines;
  }
  
}

?>