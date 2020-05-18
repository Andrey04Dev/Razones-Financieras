<?php
//pruebas
  
  require_once("conexion.php"); $conexion = new Conexion();
 $primerPeriodoI = 0;
                $primerPeriodoF =  0;
                $segundoPeriodoI =  0;
                $segundoPeriodoF = 0;
    $publicacion =$conexion->consulta("SELECT * FROM periodos");
    

      if (isset($publicacion)) {
        while($row = $conexion->extraer_registro()){
                $primerPeriodoI = $row[1];
                $primerPeriodoF = $row[2];
                $segundoPeriodoI = $row[3];
                $segundoPeriodoF =$row[4];
          
      }

  }


  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  
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
                       <h2>Finanzas del Sur-Periodos</h3>
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
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->

                <div class="container" id="pimerperi" style="position: relative; border-radius: 20px; top: 140px; border: 2px solid; padding: 10px 20px 20px 15px; background:#FFF; color: #364C78">

                <h2>Primer Periodo</h2>
                <strong> <span>Inicio</span><br></strong>
                <input value="<?php if (isset($publicacion)) {echo $primerPeriodoI;}?>" type="date" name="primerPeriodoI" id="primerPeriodoI" onchange="handler();"><br>
                <strong> <span>Fin</span><br></strong>
                <input value="<?php if (isset($publicacion)) {echo $primerPeriodoF;}?>" type="date" name="primerPeriodoF" id="primerPeriodoF" onchange="handler();"><br>
                
            </div>

            <br><br>

            <div class="container" id="segundoperi" style="position: relative; border-radius: 20px; top: 140px; border: 2px solid; padding: 10px 20px 20px 15px; background:#FFF; color: #364C78">
                <h2>Segundo Periodo</h2> 
                <strong> <span>Inicio</span><br></strong>
                <input value="<?php if (isset($publicacion)) {echo $segundoPeriodoI;}?>" type="date" name="segundoPeriodoI" id="segundoPeriodoI" onchange="handler();"><br>
                <strong> <span>Fin</span><br></strong>
                <input value="<?php if (isset($publicacion)) {echo $segundoPeriodoF;}?>" type="date" name="segundoPeriodoF" id="segundoPeriodoF" onchange="handler();"><br>
            </div> <br><br>


            
            <div style="position: relative; top: 170px; background-color: #364C78; padding: 80px 60px 40px; color: #ffffff;" class="text-center">
            <span>Copyright © 2017 <ELEMENT>FINANZAS DEL SUR</ELEMENT><br>Diseñado y Desarrollado por <a href= "https://www.facebook.com/jafeth.granadosroman"target="_blank" class="enlaces2">Jafeth Granados Román</a> , <a href=https://www.facebook.com/shawrv03 target="_blank" class="enlaces2">Shawny Rodríguez Villalobos</a>, <a href= https://www.facebook.com/andrey.elizondomarintarget="_blank" class="enlaces2">Andrey Elizondo Marín</a> & <a href= https://www.facebook.com/xinia.rodriguez.1042 class="enlaces2">Xinia Rodríguez</a></span>
        </div>

    </body>
</html>