<?php
class varScopes
{
  // Declare variables of the 3 visibility types
  public $varPublic1 = "This is a public variable";
  protected $varProtected1 = "This is a protected variable";
  private $varPrivate1 = "This is a private variable";

  // Function to demonstrate private and protected output within their scope
  function parentFunction()
  {
    // From this vantage all 3 visibilities can be evaluated
    echo '<div class="alert alert-info" role="alert">';
    echo 'From level 1 function:  ';
    echo $this->varPublic1 . ',  ';
    echo $this->varProtected1 . ',  ';
    echo $this->varPrivate1 . '.';
    echo '</div>';
    $this->childFunction();
  }

  private function childFunction()
  {
    // From this vantage (2 levels in) we cannot reach the private variable
    // thus it has been ommitted
    echo '<div class="alert alert-warning" role="alert">';
    echo 'From level 2 function:  ';
    echo $this->varProtected1 . ',  ';
    echo $this->varPublic1 . '.';
    echo '</div>';
  }
}
?>
