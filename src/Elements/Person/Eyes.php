<?php

namespace AvatarBuilder\Elements\Person;

use AvatarBuilder\Interfaces\IDrawable;
use AvatarBuilder\Elements\{ AbstractColor, Line };

class Eyes extends AbstractColor implements IDrawable {

  function __construct () {
    $this->setColor('162_111_0');
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
    if ($options['eyes']->getValue() == 'eyes') {
      // left eye
      $lines[] = new Line(10, 7, 2, 'white');
      $lines[] = new Line(10, 7, 1, 'eyes');
      // right eye
      $lines[] = new Line(13, 7, 2, 'white');
      $lines[] = new Line(13, 7, 1, 'eyes');
      // make a guy eyebrows
      if($options['gender']->getValue() == 'male') {
        $lines[] = new Line(10, 6, 2, 'hair');
        $lines[] = new Line(13, 6, 2, 'hair');
      }
      // make a girls bigger eyes
      else {
        $lines[] = new Line(10, 6, 2, 'white');
        $lines[] = new Line(13, 6, 2, 'white');
      }
    }
    if ($options['eyes']->getValue() == 'glasses') {
      // frames
      $lines[] = new Line(6, 6, 13, 'eyes');
      $lines[] = new Line(6, 7, 13, 'eyes');
      $lines[] = new Line(6, 8, 13, 'eyes');
      $lines[] = new Line(6, 9, 13, 'eyes');
      // lenses
      $lines[] = new Line(7, 7, 1, 'white');
      $lines[] = new Line(7, 8, 1, 'black');
      $lines[] = new Line(8, 7, 4, 'black');
      $lines[] = new Line(8, 8, 4, 'black');
      $lines[] = new Line(13, 7, 1, 'white');
      $lines[] = new Line(13, 8, 1, 'black');
      $lines[] = new Line(14, 7, 4, 'black');
      $lines[] = new Line(14, 8, 4, 'black');
      // nose
      $lines[] = new Line(12, 9, 1, 'skin');
    }
    if ($options['eyes']->getValue() == 'goggles') {
      // frames
      $lines[] = new Line(7, 5, 11, 'eyes');
      $lines[] = new Line(6, 6, 13, 'eyes');
      $lines[] = new Line(6, 7, 13, 'eyes');
      $lines[] = new Line(6, 8, 13, 'eyes');
      $lines[] = new Line(7, 9, 5, 'eyes');
      $lines[] = new Line(13, 9, 5, 'eyes');
      // lenses
      $lines[] = new Line(8, 6, 9, 'black');
      $lines[] = new Line(7, 7, 11, 'black');
      $lines[] = new Line(14, 8, 3, 'black');
      $lines[] = new Line(8, 8, 3, 'black');
      $lines[] = new Line(8, 6, 1, 'white');
      $lines[] = new Line(14, 6, 1, 'white');
    }
    return $lines;
  }
  
}

?>