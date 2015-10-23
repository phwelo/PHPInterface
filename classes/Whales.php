<?php
// Define class "Whale" to describe whales
class Whale implements iAnimals
{
  public function eats()
  {
    return get_class($this) . " eats Plankton.";
  }
  public function drinks()
  {
    return get_class($this) . " drinks Beer.";
  }
  public function plays()
  {
    return get_class($this) . " plays badminton.";
  }
}
?>
