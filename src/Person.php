<?php

namespace AvatarBuilder;

class Person extends Avatar {
  
  /**
   * Person
   * 
   * @param int $width (optional)
   * @param int $height (optional)
   */
  function __construct (int $width = null, int $height = null) {
    parent::__construct($width, $height);
    // options
    $this->options['body'] = new Options\Person\Body();
    $this->options['eyes'] = new Options\Person\Eyes();
    $this->options['face'] = new Options\Person\Face();
    $this->options['feet'] = new Options\Person\Feet();
    $this->options['gender'] = new Options\Person\Gender();
    $this->options['hair'] = new Options\Person\Hair();
    $this->options['hands'] = new Options\Person\Hands();
    $this->options['head'] = new Options\Person\Head();
    $this->options['jacket'] = new Options\Person\Jacket();
    $this->options['legs'] = new Options\Person\Legs();
    // elements
    $this->elements['head'] = new Elements\Person\Head();
    $this->elements['hair'] = new Elements\Person\Hair();
    $this->elements['skin'] = new Elements\Person\Skin();
    $this->elements['mouth'] = new Elements\Person\Mouth();
    $this->elements['helmet'] = new Elements\Person\Helmet();
    $this->elements['jacket'] = new Elements\Person\Jacket();
    $this->elements['facecovering'] = new Elements\Person\FaceCovering();
    $this->elements['eyes'] = new Elements\Person\Eyes();
    $this->elements['hands'] = new Elements\Person\Hands();
    $this->elements['pants'] = new Elements\Person\Pants();
    $this->elements['belt'] = new Elements\Person\Belt();
    $this->elements['shoe'] = new Elements\Person\Shoe();
  }

}

?>