<?php
$name=$_POST["name"];
$phone=$_POST["phone"];
$service=$_POST["service"];
$message=$_POST["message"];
if ($name=="") {
   echo "<p>No has escrito ningún nombre en la entrada 
      del formulario.</p>"; 
   }
else {
   $db=mysql_connect("localhost","root","");
   mysql_select_db("mecanica",$db);
   $sql="INSERT INTO contacto
      (name,phone, service, message)
      VALUES ('$name' ,'$phone','$service' , '$message')
      ";
   mysql_query($sql,$db);
   mysql_close($db);
   echo "
    <link rel='stylesheet' href='./assents/style.css'>
   <META HTTP-EQUIV='REFRESH' CONTENT='1;URL=../index.html'>
   <h2  style=' width: 320px;
    color: var(--white);
    font-family: var(--text-p);
    font-size: 30px;
    line-height: 20px;
    float: left;
    line-height:30px;
    margin-left: 60px;
    margin-top: 20px;'>Gracias por el Mensaje, pronto nos pondremos en contacto contigo: </h2>

    </br>
     </br>
      <p style=' width: 320px;
    color: var(--white);
    font-family: var(--text-p);
    font-size: 13px;
    padding-top:30px;
    line-height: 20px;
    margin-left: 60px;
    margin-top: 15px;'>Nombre : $name.</p>
      <p  style=' width: 320px;
    color: var(--white);
    font-family: var(--text-p);
    font-size: 13px;
    line-height: 20px;
    margin-left: 60px;
    margin-top: 10px;'>Servicio Solicitado : $service</p>
      
      ";
}

error_reporting(0);
?>