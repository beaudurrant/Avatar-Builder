<?php

namespace AvatarBuilder;

use AvatarBuilder\Elements\{ White, Black };
use AvatarBuilder\Interfaces\IDrawable;

abstract class Avatar {
  
  // image object
  private $image;
  
  // default height and width for the avatar
  private int $width = 250;
  private int $height = 250;
  // number of pixels in the avatar
  private int $pixels = 25;
  
  // width of each square; width / pixels
  private int $unitWidth;
  
  // options for customizing the avatar
  protected array $options = [];
  
  // elements of the body for drawing and colors
  protected array $elements = [];
  
  // color from picker with x & y
  private ?array $requestedColor = null;
  
  // element to update with the picker color
  private ?array $updateElementColor = null;
  
  // session to save colors
  private array $session;
  
  /**
   * Avatar
   * 
   * @param int $width (optional)
   * @param int $height (optional)
   */
  function __construct (int $width = null, int $height = null) {
    if ($width) $this->width = $width;
    if ($height) $this->height = $height;
    
    $this->unitWidth = $this->width / $this->pixels;
    
    $this->image = imagecreatetruecolor($this->width, $this->height);
    
    $this->elements['white'] = new White();
    $this->elements['black'] = new Black();
    
    // fill background of image
    [$r, $g, $b] = $this->elements['white']->getColor();
    $imageColor = imagecolorallocate($this->image, (int) $r, (int) $g, (int) $b);
    imagefilledrectangle($this->image, 0, 0, $this->width, $this->height, $imageColor);
    imagealphablending($this->image, false);
    imagesavealpha($this->image, true);
  }

  /**
   * Destroy our image
   */
  function __destruct () {
    imagedestroy($this->image);
  }
  
  /**
   * Sets the color code for an element and saves in session
   *
   * @param string $key
   * @param string $color
   */
  private function setColor (string $key, string $color) : void {
    $this->elements[$key]->setColor($color);
    $this->session[$key] = $color;
  }

  /**
   * Draws a pixel on our image
   * 
   * @param int $x
   * @param int $y
   * @param string $key (IColor Object)
   * @param int $imageColor (gd color identifier)
   */
  private function drawPixel (int $x, int $y, $key, $imageColor) : void {
    // set the new color for the picker and refresh
    if ($this->requestedColor && $this->requestedColor['x'] == $x && $this->requestedColor['y'] == $y) {
      $this->updateElementColor = ['element' => $key, 'color' =>$this->requestedColor['color']];
    }
    // we don't have to draw if we are going to update the color in the future
    if ($this->updateElementColor) return;
    $traslatedX = $x * $this->unitWidth;
    $traslatedY = $y * $this->unitWidth;
    imagefilledrectangle($this->image, $traslatedX, $traslatedY, ($traslatedX + $this->unitWidth), ($traslatedY + $this->unitWidth), $imageColor);
  }
  
  /**
   * Draw a line on our image
   *
   * @param int $x
   * @param int $y
   * @param int $length (how many pixel to draw)
   * @param string $key (IColor Object)
   */
  private function drawLine (int $x, int $y, int $length, $key) : void {
    [$r, $g, $b] = $this->elements[$key]->getColor();
    $imageColor = imagecolorexact($this->image, (int) $r, (int) $g, (int) $b);
    if ($imageColor == -1) {
      $imageColor = imagecolorallocate($this->image, (int) $r, (int) $g, (int) $b);
    }
    for ($i = $x; $i < $x + $length; $i++) {
      $this->drawPixel($i, $y, $key, $imageColor);
    }
  }

  /**
   * Draw the elements on our image
   */
  private function draw () : void {
    // fill the grid with lines from all the elements
    foreach ($this->elements as $key => $element) {
      if (!$element instanceof IDrawable) continue;
      foreach ($element->getLines($this->options) as $line) {
        $this->drawLine($line->getX(), $line->getY(), $line->getLength(), $line->getColor());
      }
    }
    // we always want the top element to change color in cases where lines may overlap
    if ($this->updateElementColor) {
      $this->setColor($this->updateElementColor['element'], $this->updateElementColor['color']);
      $this->requestedColor = null;
      $this->updateElementColor = null;
      $this->draw();
    }
  }
  
  /**
   * Sets the options/colors or uses defaults
   *
   * @param array $options
   * @param array &$session
   */
  public function setOptions (array $options, array &$session) : void {
    // set our session
    $this->session = &$session;
    // get options if they exist
    foreach ($options as $key => $value) {
      if (!array_key_exists($key, $this->options)) continue;
      $this->options[$key]->setValue($value);
    }
    // get colors from the session if they exist
    foreach ($this->elements as $key => $element) {
      if (array_key_exists($key, $session)) {
        $element->setColor($session[$key]);
      }
    }
    // request colors from picker
    if (array_key_exists('colors', $options) && $options['colors']) {
      [$color, $coords] = explode(',', $options['colors']);
      [$x, $y] = explode('_', $coords);
      $this->requestedColor = ['x' => $x, 'y' => $y, 'color' => $color];
    }
  }
  
  /**
   * Sets headers and displays the image
   */
  public function display () : void {
    $this->draw();
    header('Content-type: image/png;');
    imagepng($this->image);
  }
  
  /**
   * Saves the image
   * 
   * @param string $destination
   */
  public function save (string $destination) : void {
    $this->draw();
    imagepng($this->image, $destination);
  }

}

?>