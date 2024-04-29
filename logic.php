<?PHP
function calculateWinner($squares) {
     $lines = array(
      array(0, 1, 2),
      array(3, 4, 5),
      array(6, 7, 8),
      array(0, 3, 6),
      array(1, 4, 7),
      array(2, 5, 8),
      array(0, 4, 8),
      array(2, 4, 6),
     );
    for ($i = 0; $i < count($lines); $i++) {
      list($a, $b, $c) = $lines[$i];
      if ($squares[$a] and $squares[$a] === $squares[$b] and $squares[$a] === $squares[$c]) {
        return $squares[$a];
      }
    }

    $condition = true;

    foreach($squares as $square){
      if($square === ""){
        $condition = false;
      }
    }

    if($condition){
      return "tied";
    }

    return null;
  }
  ?>

<?php
  function runScript(){
    session_start();

    $symbol = "X";
    if($_SESSION["xIsSymbol"]){
      $_SESSION["xIsSymbol"] = !($_SESSION["xIsSymbol"]);
    }else{
      $symbol = "O";
      $_SESSION["xIsSymbol"] = !($_SESSION["xIsSymbol"]);
    }

    $winner = calculateWinner($_SESSION["board"]);

    if($winner){
      echo "winner is {$winner} <br/>";
      return null;
    }

    if(isset($_POST['button-01']) and $_SESSION["board"][0] === ""){
      $_SESSION["board"][0] =$symbol;
    }elseif(isset($_POST['button-02']) and $_SESSION["board"][1] === ""){
      $_SESSION["board"][1] =$symbol;
    }elseif(isset($_POST['button-03']) and $_SESSION["board"][2] === ""){
      $_SESSION["board"][2] =$symbol;
    }elseif(isset($_POST['button-04']) and $_SESSION["board"][3] === ""){
      $_SESSION["board"][3] =$symbol;
    }elseif(isset($_POST['button-05']) and $_SESSION["board"][4] === ""){
      $_SESSION["board"][4] =$symbol;
    }elseif(isset($_POST['button-06']) and $_SESSION["board"][5] === ""){
      $_SESSION["board"][5] =$symbol;
    }elseif(isset($_POST['button-07']) and $_SESSION["board"][6] === ""){
      $_SESSION["board"][6] =$symbol;
    }elseif(isset($_POST['button-08']) and $_SESSION["board"][7] === ""){
      $_SESSION["board"][7] =$symbol;
    }elseif(isset($_POST['button-09']) and $_SESSION["board"][8] === ""){
      $_SESSION["board"][8] =$symbol;
    }else{
      $_SESSION["xIsSymbol"] = !($_SESSION["xIsSymbol"]);
    }

    $winner = calculateWinner($_SESSION["board"]);

    if($winner){
      echo "winner is {$winner} <br/>";
      return null;
    }
  }

  runScript();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="form-divs">
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-01" value=""><?php echo $_SESSION["board"][0] ?></button>
      </div>
    </form>
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-02" value=""><?php echo $_SESSION["board"][1] ?></button>
      </div>
    </form>
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-03" value=""><?php echo $_SESSION["board"][2] ?></button>
      </div>
    </form>
  </div>
  <div class="form-divs">
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-04" value=""><?php echo $_SESSION["board"][3] ?></button>
      </div>
    </form>
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-05" value=""><?php echo $_SESSION["board"][4] ?></button>
      </div>
    </form>
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-06" value=""><?php echo $_SESSION["board"][5] ?></button>
      </div>
    </form>
  </div>
  <div class="form-divs">
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-07" value=""><?php echo $_SESSION["board"][6] ?></button>
      </div>
    </form>
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-08" value=""><?php echo $_SESSION["board"][7] ?></button>
      </div>
    </form>
    <form method="post" action="logic.php">
      <!-- <input type="text" name="counter" value=""/> -->
      <div>
        <button class="button" type="submit" name="button-09" value=""><?php echo $_SESSION["board"][8] ?></button>
      </div>
    </form>
  </div>
  <form method="post" action="index.php">
    <div>
      <button class="reset-button" type="submit" name="" value="">Reset</button>
    </div>
  </form>
</body>
</html>

