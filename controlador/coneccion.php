<?php
$conn_string= "host=localhost port=5432 dbname=UTI user=postgres password=admin";
$dbconn=pg_connect($conn_string);
if(!$dbconn){
    echo "Ocurrio un error en la conexion";
    exit;
}//else {
   // echo "Conexion exitosa";
//}
?>