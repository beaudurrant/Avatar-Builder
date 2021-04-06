<?php

namespace AvatarBuilder\Options;

abstract class AbstractOption {
  
  protected array $values = [];
  protected string $value;
  
  /**
   * Sets the value for the option
   *
   * @param string $value
   */
  public function setValue (string $value) : void {
    $this->value = $value;
  }
  
  /**
   * Returns value for the option
   *
   * @return string
   */
  public function getValue () : string {
    return $this->value;
  }
  
  /**
   * Returns values for the option
   *
   * @return array
   */
  public function getValues () : array {
    return $this->values;
  }
  
}

?>