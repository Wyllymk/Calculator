<?php
  if(isset($_POST['sub'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $oprnd=$_POST['sub'];
    if($oprnd=="+")
      $ans=$num1+$num2;
    else if($oprnd=="-")
      $ans=$num1-$num2;
    else if($oprnd=="x")
      $ans=$num1*$num2;
    else if($oprnd=="/")
      $ans=$num1/$num2;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
 
  <h1 id="heading1">My Calculator</h1>
    <form id="form" action="index.php" method="post">
       
        First Number:<input type="number" step="0.001" name="num1" value=""><br><br>
        
        Second number:<input type="number" step="0.001" name="num2" value=""><br><br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/"><br>
        
        <br>Result: <input type='text' value="<?php echo $ans; ?>"><br>

        
    </form>

    
</div>
<script src="script.js"></script>
</body>
</html>