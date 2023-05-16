<?php 

include "../models/post.Datos.model.php";

/*---------------------------------- Pregunta 1 ----------------------------------*/
$prg1 = $_REQUEST["rbPrg1"];
if($prg1 == 1){
    $PR1PrimeraVisita = 1;
} else if($prg1 == 2){
    $PR1PrimeraVisita = 2;
}

/*---------------------------------- Pregunta 2 ----------------------------------*/
$prg2 = $_REQUEST["rbPrg2"];
$ArrayPR2 = Array($prg2);
$PR2RangoEdad = $ArrayPR2[0];

/*---------------------------------- Pregunta 3 ----------------------------------*/
$prg3 = $_REQUEST["rbPrg3"];
$ArrayPR3 = Array($prg3);
$PR3DondeVisitas = $ArrayPR3[0];

/*---------------------------------- Pregunta 4 ----------------------------------*/
$prg4 = $_REQUEST["rbPrg4"];
$ArrayPR4 = Array($prg4);
$PR4ComoConociste = $ArrayPR4[0];

/*---------------------------------- Pregunta 5 ----------------------------------*/
$prg5Limpieza = $_POST["rbPrg5Limpieza"];
$prg5Servicio = $_POST["rbPrg5Servicio"];
$prg5Comida = $_POST["rbPrg5Comida"];
$prg5CalidadPrecio = $_POST["rbPrg5CalidadPrecio"];

if(isset($prg5Limpieza )){
    $PR5Limpieza = $_POST["rbPrg5Limpieza"];
} else {
    $PR5Limpieza = 0;
}

if(isset($prg5Servicio)){
    $PR5Servicio = $_POST["rbPrg5Servicio"];
} else {
    $PR5Servicio = 0;
}

if(isset($prg5Comida)){
    $PR5Comida = $_POST["rbPrg5Comida"];
} else {
    $PR5Comida = 0;
}

if(isset($prg5CalidadPrecio)){
    $PR5CalidadPrecio = $_POST["rbPrg5CalidadPrecio"];
} else {
    $PR5CalidadPrecio = 0;
}

/*---------------------------------- Pregunta 6 ----------------------------------*/
$prg6 = $_REQUEST["rbPrg6"];
if($prg6 == 1){
    $PR6VolverVisita = 1;
} else if($prg6 == 2){
    $PR6VolverVisita = 2;
}

/*---------------------------------- Pregunta 7 ----------------------------------*/
$prg7 = $_POST["Prg7"];
if(isset($prg7)){
    $PR7Comentario = strip_tags($_POST["Prg7"]);
}

if($PR7Comentario == ""){
    $PR7Comentario = "Cliente no registro un comentario";
}

/*---------------------------------- Envio de Datos ----------------------------------*/
$Auth = new PostDatos();

if($Auth->postDataEncuesta($PR1PrimeraVisita, $PR2RangoEdad, $PR3DondeVisitas, $PR4ComoConociste, $PR5Limpieza, $PR5Servicio, $PR5Comida, $PR5CalidadPrecio, $PR6VolverVisita, $PR7Comentario)){
    header("location: ../views/Error.php"); //Error
} else {
    header("location: ../views/Exito.php");  //Correcto
}

?>