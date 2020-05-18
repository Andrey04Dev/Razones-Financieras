<?php 
 require_once("conexion.php"); $conexion = new Conexion();
 ?>
<!DOCTYPE html>
<html>
		<head>

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
                <li><a id="estado"><span></span> Estados Financieros</a></li>
                <li><a id="Liqui"><span></span> R Liquidez</a></li>
                <li><a id="endeudamiento"><span></span> R Endeudamiento</a></li>
                <li><a id="rentabilidad"><span></span> R Rentabilidad</a></li>
                <li><a id="​razon"><span></span> R Cobertura</a></li>
                <li><a href=""><span></span> Indicaciones y Cobertura</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container" style="position: relative; background: #FFF; color: #364C78; top: 140px; border: 0px solid; padding: 0px 3px 3px; left: 100px;  ">
			<h1>Finanzas del Sur</h1>

		</div><br><br><br><br><br><br>

		<div class="container" style="position: relative; border: 0px solid; background: #FFF; top: 40px; color: #364C78; left: 100px;padding: 10px 20px 20px 15px">
  			<h3>Estado de Resultados</h3>            
  			<table class="table table-hover" id="tbl_resultados">
   			<thead>
      			<tr>
	       		 	<th>Periodo</th>
	        		<th>Primer Periodo</th>
	        		<th>Segundo Periodo</th>
      			</tr>
   		 </thead>
    	<tbody>
      			<tr>
			        <td>Ventas</td>
			        <td>10000</td>
			        <td>12000</td>
     			 </tr>
		      <tr>
		       		 <td>Costo de Ventas</td>
		        	 <td>6000</td>
		       		 <td>7000</td>
		      </tr>
		      <tr>
		        <td>Utilidad Bruta</td>
		        <td>4000</td>
		        <td>5000</td>
		      </tr>
   		 </tbody>
  			</table>
			</div> <br>


			<div class="container" style="position: relative; border: 0px solid; background: #FFF; top: 40px; color: #364C78; left: 100px;padding: 10px 20px 20px 15px">
  			<h3>Balance General</h3>            
  			<table class="table table-hover" id="tbl_general">
   			<thead>
      			<tr>
	       		 	<th>Periodo</th>
	        		<th>Primer Periodo</th>
	        		<th>Segundo Periodo</th>
      			</tr>
   		 </thead>
    	<tbody>
      			<tr>
			        <td>Efectivos</td>
			        <td>10000</td>
			        <td>12000</td>
     			 </tr>
		      <tr>
		       		 <td>Cuentas por Cobrar</td>
		        	 <td>6000</td>
		       		 <td>7000</td>
		      </tr>
		      <tr>
		        <td>Inventarios</td>
		        <td>4000</td>
		        <td>5000</td>
		      </tr>
   		 </tbody>
  			</table>
			</div>



			<div style="position: relative; top: 170px; background-color: #364C78; padding: 80px 60px 40px; color: #ffffff;" class="text-center">
			<span>Copyright © 2017 <ELEMENT>FINANZAS DEL SUR</ELEMENT><br>Diseñado y Desarrollado por <a href= "https://www.facebook.com/jafeth.granadosroman"target="_blank" class="enlaces2">Jafeth Granados Román</a> , <a href=https://www.facebook.com/shawrv03 target="_blank" class="enlaces2">Shawny Rodríguez Villalobos</a>, <a href= https://www.facebook.com/andrey.elizondomarintarget="_blank" class="enlaces2">Andrey Elizondo Marín</a> & <a href= https://www.facebook.com/xinia.rodriguez.1042 class="enlaces2">Xinia Rodríguez</a></span>
		</div>

	</body>

</html>