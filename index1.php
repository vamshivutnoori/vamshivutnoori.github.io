<!doctype <!DOCTYPE html>
<html>
<body>

<form method="post"  action="<?php echo $_SERVER["PHP_SELF"] ?>"> 
TF1:<input type="number" name="n1"> <br>
TF2:<input type="number" name="n2"> <br>
<input type="submit" value="add"><br><br> <br>
</form>
 <?php
   $x =  $_REQUEST['n1'];
   $y = $_REQUEST['n2'];
   echo $x + $y;
   echo readfile('text');
 ?>

</body>
</html>

