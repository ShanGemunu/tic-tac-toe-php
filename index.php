<?php
  session_start();
  $_SESSION["xIsSymbol"] = true;
  $_SESSION["board"] = array("", "", "","", "", "","", "", ""); 
  header("Location: /demo/logic.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
