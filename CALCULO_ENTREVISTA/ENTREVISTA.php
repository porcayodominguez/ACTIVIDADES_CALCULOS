<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Resultados ejercicio 5</title>
    <link rel="stylesheet" href="estiloentrevista.css">
  </head>
  <body>
    <div class="contenedor-principal">
    <h2 class="contenedor-titulo">PUNTOS OBTENIDOS.</h2>
    <label for="" class="contenedor-label"><h2>EL SISTEMA IMPRIMIRA SU REPORTE EN MENOS DE 24 HRS.</h2>
      <a href="https://mail.google.com/mail/u/0/?hl=es-419#inbox" target="_blank" class="enlace-aside">Estimado usuario si reporta algún problema con sus puntos. SELECCIONE
        este enlace (ENVIANDO UN CORREO ELECTRONICO)<br></a>

      <div class="contenedor-form">
    <?php
    $nivel=$_POST['nivel'];
    $edad=$_POST['edad'];
    $estado=$_POST['estado'];

    switch ($estado) {
      case 1:
      if($nivel == 1 ) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+5+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+5+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+5+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+5+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 2) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+8+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+8+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+8+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+8+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 3) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+10+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+10+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+10+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+10+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 4) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+15+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+15+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+15+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+15+20;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
        break;
      case 2:
      if($nivel == 1) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+5+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+5+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+5+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+5+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 2) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+8+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+8+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+8+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+8+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 3) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+10+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+10+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+10+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+10+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 4) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+15+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+15+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+15+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+15+15;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
        break;
      case 3:
      if($nivel == 1) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+5+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+5+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+5+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+5+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 2) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+8+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+8+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+8+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+8+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 3) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+10+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+10+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+10+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+10+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 4) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+15+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+15+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+15+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+15+12;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
        break;
      case 4:
      if($nivel == 1) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+5+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+5+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+5+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+5+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 2) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+8+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+8+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+8+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+8+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 3) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+10+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+10+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+10+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+10+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
      if($nivel == 4) {
        if ($edad>=18 && $edad<=24) {
          $puntos=10+15+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if ($edad>=25 && $edad<=30) {
          $puntos=20+15+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else if($edad>=31 && $edad<=40){
          $puntos=15+15+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }else{
          $puntos=8+15+18;
          echo "SU PUNTUACIÓN QUE ALCANZO ES DE : $puntos Puntos";
        }
      }
        break;
      default:
        echo "LO SENTIMOS ESTÁ OPCIÓN NO SE ENCUENTRA DISPONIBLE. FAVOR DE VERFICAR BIEN SUS DATOS<br>
        GRACIAS.";
        break;
    }
     ?>
     <div>
   </div>
  </body>
</html>
