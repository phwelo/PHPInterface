<?php
// Define class "Ape" to decsribe apes
class Ape implements iAnimals
{
  public function eats()
  {
    return get_class($this) . " eats bananas.";
  }
  public function drinks()
  {
    return get_class($this) . " drinks from a river or pond.";
  }
  public function plays()
  {
    return get_class($this) . " plays hide and seek.";
  }
}
?>
