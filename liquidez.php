<?php 
 require_once("conexion.php"); $conexion = new Conexion();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  
   <title>Finanzas del Sur</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="js/funciones.js"></script>
            <script src="js/jquery-2.0.3.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
            <link rel="shortcut icon" type="img/x-icon" href="favicon.ico" />
            <title></title>

</head>
<body class="">
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
                       <h2>Finanzas del Sur-Liquidez</h3>
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

                <center><h1>Razones de Liquidez</h1>
                <span>Las razones de liquidez se refieren a la facilidad con la que la empresa puede pagar sus cuentas. </span></center>
                <br><br><br>
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
                        <td>Capital neto de trabajo</td>

                        <td><?php   
                         

                       // $resultado=  $conexion->multiquery ("call Capital_neto_de_trabajo('2015-01-01', '2015-12-31',@valor); SELECT @valor;");
                        
$link = $conexion->conectar_base_datos();

/* comprobar conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

$query  = "call Capital_neto_de_trabajo('".$_GET['primerPeriodoI']."', '".$_GET['primerPeriodoF']."',@valor);";
$query .= "SELECT @valor;";
 
 echo  $conexion->mutiquery($query);

                 ?></td>
                        <td><?php 
                        $query  = "call Capital_neto_de_trabajo('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
$query .= "SELECT @valor;";
 echo  $conexion->mutiquery($query);
                         ?></td>
                    </tr>
                    <tr>
                        <td>Índice de solvencia</td>
                        <td><?php 
                        $query  = "call indice_solvencia('". $_GET['primerPeriodoI'] ."', '". $_GET['primerPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?></td>
                        <td><?php 
                        $query  = "call indice_solvencia('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?></td>
                    </tr>
                    <tr>
                        <td>Prueba ácida</td>
                        <td>
                            <?php 
                        $query  = "call prueba_acida('". $_GET['primerPeriodoI'] ."', '". $_GET['primerPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>
                        </td>
                        <td>
                            <?php 
                        $query  = "call prueba_acida('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Rotación de inventarios</td>
                          <td>
                            <?php 
                        $query  = "call rotacion_inventario('". $_GET['primerPeriodoI'] ."', '". $_GET['primerPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>
                        </td>
                        <td>
                            <?php 
                        $query  = "call rotacion_inventario('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Rotación de cartera</td>
                       <td>
                            <?php 
                        $query  = "call rotacion_cartera('". $_GET['primerPeriodoI'] ."', '". $_GET['primerPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>
                        </td>
                        <td>
                            <?php 
                        $query  = "call rotacion_cartera('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Rotación de cuentas por pagar</td>
                    <td>
                            <?php 
                        $query  = "call Rotacion_de_cuentas_por_pagar('". $_GET['primerPeriodoI'] ."', '". $_GET['primerPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>
                        </td>
                        <td>
                            <?php 
                        $query  = "call Rotacion_de_cuentas_por_pagar('". $_GET['segundoPeriodoI'] ."', '". $_GET['segundoPeriodoF'] ."',@valor);";
                        $query .= "SELECT @valor;";
                        echo  $conexion->mutiquery($query);
                         ?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div><br>
        <div style="position: relative; top: 170px; background-color: #364C78; padding: 80px 60px 40px; color: #ffffff;" class="text-center">
            <span>Copyright © 2017 <ELEMENT>FINANZAS DEL SUR</ELEMENT><br>Diseñado y Desarrollado por <a href= "https://www.facebook.com/jafeth.granadosroman"target="_blank" class="enlaces2">Jafeth Granados Román</a> , <a href=https://www.facebook.com/shawrv03 target="_blank" class="enlaces2">Shawny Rodríguez Villalobos</a>, <a href= https://www.facebook.com/andrey.elizondomarintarget="_blank" class="enlaces2">Andrey Elizondo Marín</a> & <a href= https://www.facebook.com/xinia.rodriguez.1042 class="enlaces2">Xinia Rodríguez</a></span>
        </div>

    </body>

</html>