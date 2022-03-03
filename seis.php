<!DOCTYPE html>

<html>
<head>
   <title></title> 
</head>
<body>
<h1>Tablas de multiplicar</h1>
<h3>Escribe un número del 1 al 30 y  te diré la tabla de multiplicar.</h3>
<form action="seis.php" method="post">
   <p>Escribe aquí el número entre en 1 y el 30: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar." /></p>
</form>
<?php  
$n=$_POST['num'];
if ($n<1 or $n>30) {
    echo "no has escrito un nůmero entre el 1 y el 30.";
    }
else {
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           } 
     }
?>
</body>
</html>