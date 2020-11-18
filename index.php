<!DOCTYPE html>
<html>
  <head>
    <title>Permutations</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <h1>Given positive integers n and r, find the number of r-permutations when repetition is allowed of a set with n elements.</h1>
<h2>Enter the Numbers:</h2><br>
    <form method="post">
      <label for="firstNumber">Number of Objects (n):</label><br>
      <input type="number" name="firstNumber" id="firstNumber"><br>
      <label for="secondNumber">Number of Samples (r):</label><br>
      <input type="number" name="secondNumber" id="secondNumber"><br>
      <input type="submit" name="submit" value="Solve" />
    </form>
    <h3>
      <?php
      if(isset($_POST['firstNumber']) && isset($_POST['secondNumber'])){
        $n = $_POST['firstNumber'];
        $r = $_POST['secondNumber'];
      }
        if($_POST) {
          if ($n > "0" && $r > "0") {
            echo(pow($n,$r));
          }
          else{
            echo "Integer(s) must be positive";
          }
        }
      ?>
    </h3>
  </body>
</html>

