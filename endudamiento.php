<?php 
 require_once("conexion.php"); $conexion = new Conexion();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Finanzas del Sur</title>
	  
   <script src="js/jquery-2.0.3.js"></script>
 <link rel="stylesheet" href="css/bootstrap.min.css">
   <script src="js/funciones.js"></script>
    <script src="js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/stylemenu.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="background: #364C78">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
          
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav" style="color: #FFF">
                       <h2>Finanzas del Sur-Endeudamientos</h3>
                <li><a href="index.php"><span></span> Periodos</a></li> 
                <li><a href="Estados.php"><span></span> Estados Financieros</a></li>
                <li><a id="Liqui"><span></span> R Liquidez</a></li>
                <li><a id="endeudamiento"><span></span> R Endeudamiento</a></li>
                <li><a id="rentabilidad"><span></span> R Rentabilidad</a></li>
                <li><a id="​razon"><span></span> R Cobertura</a></li>
                <li><a href="Indicaciones.php"><span></span> Indicaciones y Cobertura</a></li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="container" style="position: relative; border-radius: 20px; top: 140px; border: 2px solid; padding: 10px 20px 20px 15px; background:#FFF; color: #364C78">
            <center><h1>Razones de Endeudamiento</h1>
                <span>Es una relación financiera que indica el porcentaje de activos de una empresa que se proporciona con respecto a la deuda. </span></center><br><br><br>
            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th> </th>
                        <th>Primer Periodo</th>
                        <th>Segundo Periodo</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td>Periodo</td>
                        <td>Del <?php if (isset($_GET['primerPeriodoI']) and  isset($_GET['primerPeriodoF'])) {echo $_GET['primerPeriodoI'] ;
                        echo" Hasta "; echo $_GET['primerPeriodoF'] ;}?>  </td>
                        <td>Del <?php if (isset($_GET['segundoPeriodoI']) and  isset($_GET['segundoPeriodoF'])) {echo $_GET['segundoPeriodoI'] ;
                        echo" Hasta "; echo $_GET['segundoPeriodoF'] ;}?> </td>
                    </tr>
                    <tr>
                        <td>Razón​​ de​​ endeudamiento</td>

                        <td><?php   
                         
                        
$link = $conexion->conectar_base_datos();

/* comprobar conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

$query  = "call Razon_endeudamiento('".$_GET['primerPeriodoI']."', '".$_GET['primerPeriodoF']."',@valor);";
$query .= "SELECT @valor;";
 
 echo  $conexion->mutiquery($query);

                 ?></td>
                        <td><?php 
                        $query  = "call Razon_endeudamiento('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
$query .= "SELECT @valor;";
 echo  $conexion->mutiquery($query);
                         ?></td>
                    </tr>
                    <tr>
                        <td>Razón​​ pasivo​​ capital</td>
                        <td><?php 
                        $query  = "call Razon_pasivo_capital_contable('". $_GET['primerPeriodoI'] ."', '". $_GET['primerPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?></td>
                        <td><?php 
                        $query  = "call Razon_pasivo_capital_contable('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?></td>
                    </tr>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="position: relative; top: 170px; background-color: #364C78; padding: 80px 60px 40px; color: #ffffff;" class="text-center">
            <span>Copyright © 2017 <ELEMENT>FINANZAS DEL SUR</ELEMENT><br>Diseñado y Desarrollado por <a href= "https://www.facebook.com/jafeth.granadosroman"target="_blank" class="enlaces2">Jafeth Granados Román</a> , <a href=https://www.facebook.com/shawrv03 target="_blank" class="enlaces2">Shawny Rodríguez Villalobos</a>, <a href= https://www.facebook.com/andrey.elizondomarintarget="_blank" class="enlaces2">Andrey Elizondo Marín</a> & <a href= https://www.facebook.com/xinia.rodriguez.1042 class="enlaces2">Xinia Rodríguez</a></span>
        </div>

    </body>

</html>