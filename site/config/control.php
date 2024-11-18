<?php
    $nome=$_POST['nome'] ?? '';
    $marca=$_POST['marca'] ?? '';
    $imagen1=$_POST['URL-imagen-1'] ?? '';
    $imagen2=$_POST['URL-imagen-2'] ?? '';
    $imagen3=$_POST['URL-imagen-3'] ?? '';
    $velocidad=$_POST['velocidad'] ?? '';
    $km=$_POST['Km'] ?? '';
    $estado=$_POST['estado'] ?? '';
    $preço=$_POST['valor'] ?? '';

    $servername="Localhost";
    $database="usuario";
    $username="root";
    $password="";
    $con = new PDO("mysql:host=$servername;dbname=$database", $username,$password);

    $sql = "INSERT INTO carros (marca,nomeCarros,preço,img,img1,img2,kilo,velocidade,estado) VALUES ('$marca', '$nome','$preço','$imagen1', '$imagen2','$imagen3','$km','$velocidad','$estado')";
    $con->query($sql); 
    header('Location: http://localhost/dashboard/site/admin.php');

 ?>