<?php

$nombre=$_POST['Nombre'];
$password=$_POST['Password'];
$rol=$_POST['Rol'];

include('conexion.php');


           $us=new conexion();
           $q="INSERT INTO `usuarios`(`user`, `password`, `tipo`) VALUES ('$nombre','$password','$rol')";
           $rta=mysqli_query($us, $q);

           if (!$rta)
           {
             echo "No se Insertó";
           }
           else
           {             
            header("location:crear.html");
           }

?>