<?php

namespace AvatarBuilder\Elements;

class Line {

  private int $x;
  private int $y;
  private int $length;
  private string $color;
  
  /**
   * Create a line to draw for an Element
   *
   * @param int $x
   * @param int $y
   * @param int $length
   * @param string $color
   */
  function __construct ($x, $y, $length, $color) {
    $this->x = $x;
    $this->y = $y;
    $this->length = $length;
    $this->color = $color;
  }
  
  /** 
   * @return int 
   */
  public function getX () : int {
    return $this->x;
  }
  
  /**
   * @return int
   */
  public function getY () : int {
    return $this->y;
  }
  
  /**
   * @return int
   */
  public function getLength () : int {
    return $this->length;
  }
  
  /**
   * @return string
   */
  public function getColor () : string {
    return $this->color;
  }
  
}

?>