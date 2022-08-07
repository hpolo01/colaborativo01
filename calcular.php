<?php
if(isset($_POST["calcular"])){
$Producto=$_POST["producto"];
$Precio=$_POST["precio"];
$Cantidad=$_POST["cantidad"];
$Total=$Precio*$Cantidad;
$Formapago=$_POST["formadepago"];
if($Formapago=="efectivo"){
    $Descuento=$Total *0.2;
}else{
    $Descuento=$Total*0.1;
}
$Neto=$Total-$Descuento;
}else{
    echo "<script> alert ('ERROR DATOS...')</script>";
}
?>
<html>
<body>
<title>LIQUIDA FACTURA</title>
<h1>FACTURA</h1>
<p>Producto:<?php echo $Producto;?></p>
<p>Precio:<?php echo $Precio;?></p>
<p>Cantidad:<?php echo $Cantidad;?></p>
<p>Forma de Pago:<?php echo $Formapago;?></p>
<p>Total:<?php echo $Total;?></p>
<p>Descuento:<?php echo $Descuento;?></p>
<p>Neto:<?php echo $Neto;?></p>

</body>
</html>