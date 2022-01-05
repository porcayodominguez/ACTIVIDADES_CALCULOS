<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultado ejercicio 8</title>
    <link rel="stylesheet" href="estilopregunta01.css">
  </head>
  <body>
    <div class="contenedor-principal">
    <h2 class="contenedor-titulo">RESULTADO DEL GRUPO.</h2>
      <div class="contenedor-form">
        <?php
        /*VARIABLES CALIFICACIONES*/
        $cal1=$_POST['cal1'];
        $cal2=$_POST['cal2'];
        $cal3=$_POST['cal3'];
        $cal4=$_POST['cal4'];
        $cal5=$_POST['cal5'];
        $cal6=$_POST['cal6'];
        $cal7=$_POST['cal7'];
        $cal8=$_POST['cal8'];
        $cal9=$_POST['cal9'];
        $cal10=$_POST['cal10'];
        $cal11=$_POST['cal11'];
        $cal12=$_POST['cal12'];
        $cal13=$_POST['cal13'];
        $cal14=$_POST['cal14'];
        $cal15=$_POST['cal15'];
        $cal16=$_POST['cal16'];
        $cal17=$_POST['cal17'];
        $cal18=$_POST['cal18'];
        $cal19=$_POST['cal19'];
        $cal20=$_POST['cal20'];
        $grupo= $_POST['grupo'];

        $alta=$cal1;
        $baja=$cal1;
        $sumaaprobados=0;
        $sumareprobados=0;
        $aprobado=0;
        $reprobado=0;

        /*PROMEDIO FINAL*/
        $promediogeneral=($cal1+$cal2+$cal3+$cal4+$cal5+$cal6+$cal7+$cal8+$cal9+$cal10+$cal11+$cal12+$cal13+$cal14+
        $cal15+$cal16+$cal17+$cal18+$cal19+$cal20)/20;

        /*CÁLCULO DE APROBACIÓN*/
        if ($cal1>=70) {
          $aprobado=$aprobado+1;
        }else{
          $reprobado=$reprobado+1;
        }
        if ($cal2>=70) {
          $aprobado=$aprobado+1;
        }else{
          $reprobado=$reprobado+1;
      }
      if ($cal3>=70) {
          $aprobado=$aprobado+1;
        }else {
          $reprobado=$reprobado+1;
        }if ($cal4>=70){
            $sumaaprobados=$aprobado++;
          }else{
            $reprobado=$reprobado+1;
          }if($cal5>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if($cal6>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if($cal7>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if($cal8>=70){
              $aprobado=$aprobado+1;
            }else {
              $reprobado=$reprobado+1;
            }if($cal9>=70){
              $aprobado=$aprobado+1;
            }else {
              $reprobado=$reprobado+1;
            }if($cal10>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if($cal11>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if($cal12>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if($cal13>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if($cal14>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if ($cal15>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if ($cal16>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }if ($cal17>=70){
              $aprobado=$aprobado+1;
            }else {
              $reprobado=$reprobado+1;
            }if ($cal18>=70){
              $aprobado=$aprobado+1;
            }else {
              $reprobado=$reprobado+1;
            }if ($cal19>=70){
              $aprobado=$aprobado+1;
            }else {
              $reprobado=$reprobado+1;
            }if ($cal20>=70){
              $aprobado=$aprobado+1;
            }else{
              $reprobado=$reprobado+1;
            }
            $sumaaprobados=$aprobado++;
            $sumareprobados=$reprobado++;

        /*¿CUÁL ES LA CALIFICACIÓN MÁS ALTA?*/
        if ($cal2>$alta) {
          $alta=$cal2;
        }if ($cal3>$alta) {
          $alta=$cal3;
        }if ($cal4>$alta) {
          $alta=$cal4;
        }if ($cal5>$alta) {
          $alta=$cal5;
        }if ($cal6>$alta) {
          $alta=$cal6;
        }if ($cal7>$alta) {
          $alta=$cal7;
        }if ($cal8>$alta) {
          $alta=$cal8;
        }if ($cal9>$alta) {
          $alta=$cal9;
        }if ($cal10>$alta) {
          $alta=$cal10;
        }if ($cal11>$alta) {
          $alta=$cal11;
        }if ($cal12>$alta) {
          $alta=$cal12;
        }if ($cal13>$alta) {
          $alta=$cal13;
        }if ($cal14>$alta) {
          $alta=$cal14;
        }if ($cal15>$alta) {
          $alta=$cal15;
        }if ($cal16>$alta) {
          $alta=$cal16;
        }if ($cal17>$alta) {
          $alta=$cal17;
        }if ($cal18>$alta) {
          $alta=$cal18;
        }if ($cal19>$alta) {
          $alta=$cal19;
        }if($cal20>$alta){
          $alta=$cal20;
        }
        /*¿CUÁL ES LA CALIFICACIÓN MÁS BAJA?*/
        if ($cal2<$baja) {
          $baja=$cal2;
        }if ($cal3<$baja) {
          $baja=$cal3;
        }if ($cal4<$baja) {
          $baja=$cal4;
        }if ($cal5<$baja) {
          $baja=$cal5;
        }if ($cal6<$baja) {
          $baja=$cal6;
        }if ($cal7<$baja) {
          $baja=$cal7;
        }if ($cal8<$baja) {
          $baja=$cal8;
        }if ($cal9<$baja) {
          $baja=$cal9;
        }if ($cal10<$baja) {
          $baja=$cal10;
        }if ($cal11<$baja) {
          $baja=$cal11;
        }if ($cal12<$baja) {
          $baja=$cal12;
        }if ($cal13<$baja) {
          $baja=$cal13;
        }if ($cal14<$baja) {
          $baja=$cal14;
        }if ($cal15<$baja) {
          $baja=$cal15;
        }if ($cal16<$baja) {
          $baja=$cal16;
        }if ($cal17<$baja) {
          $baja=$cal17;
        }if ($cal18<$baja) {
          $baja=$cal18;
        }if ($cal19<$baja) {
          $baja=$cal19;
        }if($cal20<$baja){
          $baja=$cal20;
        }
        echo "El promedio del $grupo es de: $promediogeneral<br><br><br>";
        echo "El total de aprobados es :    $sumaaprobados estudiantes.<br><br><br>";
        echo "El total de reprobados es:    $sumareprobados estudiantes.<br><br><br>";
        echo "La calificación más alta es:  $alta<br><br><br>";
        echo "La calificación más baja es:  $baja<br><br><br>";
         ?>
      </div>
    </div>
  </body>
</html>
