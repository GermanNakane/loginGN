<?php
$usuario=$_POST["user"];
$contrasenia=$_POST["pass"];
$ckusuario="Germán";
$ckcontrasenia=4321;
if($usuario==$ckusuario && $contrasenia==$ckcontrasenia){
    header("location:https://www.potrerodigital.org/");   
} else {
    header("location:incorrecto.html");
}
?>