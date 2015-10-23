<?php
// Define class "Human" to describe human beings
class Human implements iAnimals
{
  public function eats()
  {
    return get_class($this) . " eats everything.";
  }
  public function drinks()
  {
    return get_class($this) . " drinks soda.";
  }
  public function plays()
  {
    return get_class($this) . " plays videogames.";
  }
}
?>
