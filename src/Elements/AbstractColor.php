<?php

namespace AvatarBuilder\Elements;

abstract class AbstractColor {
  
  protected array $color = [];
  
  /**
   * Sets color for this element
   *
   * @param string $color
   */
  public function setColor (string $color = '0_0_0') : void {
    $this->color = explode('_', $color);
  }
  
  /**
   * Returns image allocate and color code
   *
   * @return array
   */
  public function getColor () : array {
    return $this->color;
  }
  
}

?>