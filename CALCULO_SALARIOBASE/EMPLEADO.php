<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SUELDO DE UN EMPLEADO</title>
    <link rel="stylesheet" href="estiloempleado.css">
    <link rel="stylesheet" href="sliders.css">
  </head>
  <body>
    <div class="contenedor-principal">
        <h2 class="contenedor-titulo">RESULTADO DE SU PAGO.</h2>
    <div class="contenedor-form">
    <?php
    $ubicacion= $_POST['ubicacion'];
    $nombre= $_POST['nombre'];
    $salarioBase= $_POST['salariobase'];
    $venta= $_POST['venta'];
    $comision = 0.10 * ($venta);
    $salariototal = $salarioBase + $comision;

    $total= $salariototal + $salarioBase + $comision;

    //generador de numeros aleatorios
srand (time());
$numero_aleatorio = rand(1,100);


    echo "1. HOLA ESTIMADO/ESTIMADA $nombre SU SALARIO TOTAL A PAGAR ES DE : $total pesos.<br><br><br>";



    echo "2. SU NÚMERO CORRESPONDIENTE ES $numero_aleatorio. ESTE NÚMERO PUEDE VARIAR EN LAS VECES QUE USTED VISITE AL SISTEMA, ADEMÁS SU REGISTRO QUEDA GUARDADO EN NUESTRA BASE DE DATOS.
    <br<br<br><br><br><br>";


    echo "3. SU SUCURSAL ESTÁ UBICADA EN LA CIUDAD DE $ubicacion <br><br> USTED PODRÁ RETIRAR SU DINERO Y SOLICITAR SU COMPROBANTE DE PAGO EN SU SUCURSAL SELECCIONADA.<br><br><br>";
     ?>
   </div>
   </div>
   <h4>BANCOS ASOCIADOS:</h4>
   <div class="slider">
   <ul>
     <li><img src="imagenes/BANCO1.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO2.png" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO3.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO4.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO5.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO6.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO 7.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO 8.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
     <li><img src="imagenes/BANCO9.jpg" alt="Jesús Alfredo Porcayo Dominguez"></li>
   </ul>
   </div>
  </body>
</html>
