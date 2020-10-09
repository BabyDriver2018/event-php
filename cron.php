<?php 
$conectar = new mysqli("localhost","pruebas_test","2020bmm","demo1");
/* Verificar la conexion */
if($conectar->connect_errno){
    printf ("Error al conectar a la bd: %s\n" , $conectar->connect_errno);
    exit();
}
$day = date('d');
if($day=='09'){
    $conectar->query("INSERT INTO employees (name, address, salary) VALUES ('Brayaan','b.mendoza@unas.edu.pe',2000)");
}