<?php

	/**********************************************************************
	*  ezSQL initialisation for MS-SQL
	*/

	// Include ezSQL core
	include_once "ez_sql_core.php";

	// Include ezSQL database specific component
	include_once "ez_sql_mssql.php";
require "/var/lib/ezsql/mssql.php";
	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host



	 $db_host = 'localhost';
	 $db_name = 'gamabasis_demo';
	 $db_user = 'root';
	 $db_password = '123';

	 //example
	 //$db_host = 'servername';   or $db_host = 'servername, portnumber'
	 //$db_name = 'AdventureWorks';
	 //$db_user = 'sa';
	 //$db_password = 'password';


	$db = new ezSQL_mssql($db_user, $db_password, $db_name, $db_host);
	    $publicacion = $conexion->get_results("SELECT * FROM periodos");

      if (isset($publicacion)) {
          foreach ($publicacion as $value) {
                $primerPeriodoI = $value->primerPeriodoI;
                $primerPeriodoF = $value->primerPeriodoF;
                $segundoPeriodoI = $value->segundoPeriodoI;
                $segundoPeriodoF = $value->segundoPeriodoF;
          }
      }

	/**********************************************************************
	*  ezSQL demo for MS-Sql database
	// */

	// // Demo of getting a single variable from the db
	// // (and using abstracted function sysdate)
	// $current_time = $db->get_var("SELECT " . $db->sysdate());
	// print "ezSQL demo for mS-SQL database run @ $current_time";

	// // Print out last query and results..
	// $db->debug();

	// // Get list of tables from current database..
	// $my_tables = $db->get_results("select name from ".$db_name."..sysobjects where xtype = 'U'",ARRAY_N);

	// // Print out last query and results..
	// $db->debug();

	// // Loop through each row of results..
	// foreach ( $my_tables as $table )
	// {
	// 	// Get results of DESC table..
	// 	$db->query("EXEC SP_COLUMNS '".$table[0]."'");

	// 	// Print out last query and results..
	// 	$db->debug();
	// }

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
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html">
                    <h3>Razones Financieras</h3>
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Periodos</span></a></li>
                        <li><a href="liquidez.php"><i class="fa fa-money" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​liquidez</span></a></li>
                        <li><a href="#"><i class="fa fa-balance-scale" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. endeudamiento</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">R. ​rentabilidad</span></a></li>
                        <li><a href="#"><i class="fa fa-bank" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Razones​ ​de​ ​cobertura
</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->

                <div class="user-dashboard"><br>
                    <h1>Seleccione las fechas para hacer las comparaciones en los debidos reportes.</h1><br>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                            <div class="sales">

                                <h2>Primer periodo</h2>
                                
                                <div class="btn-group">
                                Inicio
                                 <input value="<?php if (isset($publicacion)) {echo $primerPeriodoI;}?>" type="date" name="primerPeriodoI" id="primerPeriodoI" onchange="cargarPeriodos()">
                                </div>
                                <div class="btn-group">
                                Fin
                                 <input value="<?php if (isset($publicacion)) {echo $primerPeriodoF;}?>" type="date" name="primerPeriodoF" id="primerPeriodoF" onchange="cargarPeriodos()">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Segundo periodo</h2>
                                <div class="btn-group">
                                Inicio
                                 <input value="<?php if (isset($publicacion)) {echo $segundoPeriodoI;}?>" type="date" name="segundoPeriodoI" id="segundoPeriodoI" onchange="cargarPeriodos()">
                                </div>
                                <div class="btn-group">
                                Fin
                                 <input value="<?php if (isset($publicacion)) {echo $segundoPeriodoF;}?>" type="date" name="segundoPeriodoF" id="segundoPeriodoF" onchange="cargarPeriodos()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>