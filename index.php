<?php
function __autoload($pathToFile) {
  require_once 'interfaces/iAnimals.php';
  require_once 'classes/Ape.php';
  require_once 'classes/Human.php';
  require_once 'classes/varScopes.php';
  require_once 'classes/Whales.php';
}

// Create object with varScopes class to demonstrate variable visibility
$ScopeProof = new varScopes();

// From this vantage we cannot reach varProtected1 or varPrivate1
// Only $varPublic1 will be accessible
echo '<div class="alert alert-success" role="alert">';
echo 'From main, outside of class: ';
echo $ScopeProof->varPublic1 . '.';
echo '</div>';

// Call parentFunction on ScopeProof
$ScopeProof->parentFunction();

// Instantiate classes for Whale, Ape, and Human to create objects
$Henry = new Whale();
$Steve = new Ape();
$Henrietta = new Human();

?>
<div class="row">
<div class="col-md-4 col-md-offset-4 bg-info" id="primary">
  <h2>Proof that I now understand PHP Interfaces</h2>
  <div class="list-group">
    <p class="list-group-item"><?php echo($Henry->eats());?></p>
    <p class="list-group-item"><?php echo($Henry->drinks());?></p>
    <p class="list-group-item"><?php echo($Henry->plays());?></p>
  </div>
  <div class="list-group">
    <p class="list-group-item"><?php echo($Steve->eats());?></p>
    <p class="list-group-item"><?php echo($Steve->drinks());?></p>
    <p class="list-group-item"><?php echo($Steve->plays());?></p>
  </div>
  <div class="list-group">
    <p class="list-group-item"><?php echo($Henrietta->eats());?></p>
    <p class="list-group-item"><?php echo($Henrietta->drinks());?></p>
    <p class="list-group-item"><?php echo($Henrietta->plays());?></p>
  </div>
</div>
</div>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<style type="text/css">
#primary{
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}
</style>
