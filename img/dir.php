<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>Dir</title>
</head>
<body>
  <br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10">
		 <?php
		 	echo "<table class='table table-striped'>";
			$dir="./"; 
			$directorio = opendir($dir); 
			while ($archivo = readdir($directorio)) { 
				if ($archivo=="." || $archivo=="..") { echo " "; } else { 
					$archivos[$archivo] = $archivo;
				}
			}  
			ksort ($archivos);
			foreach ($archivos as $archivo) { 
				//echo "<p>$archivo</p>";
				if (is_dir($archivo))
                {
                    //if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
                    if($archivo != '.' && $archivo != '.htaccess'){
                    	echo "<tr align='left' class='text-dark'>";
							echo "<td>";
								 echo '<button type="button" class="btn btn-outline-primary bg-light btn-sm">';
                            	echo '<a target="_blank" href="'.$archivo.'"><strong>'.$archivo . '</strong></a><br />';
                        		echo '</button> ';
                       		echo "</td>";
                        //
                       		echo "<td>";
		                        echo '<button type="button" class="btn btn-outline-primary text-white btn-sm">';
		                            echo '<a target="_blank" href="'.$archivo.'/dir.php'.'"><strong>'.$archivo . '/dir.php</strong></a><br />';
		                        echo '</button><br />';
		                    echo "</td>";
		                echo "</tr>";
                    }
                }
			} 
			echo '<br />';
			foreach ($archivos as $archivo) { 
				//echo "<p>$archivo</p>";
				if (is_dir($archivo))
                {
                    //echo '<a href="'.$archivo.'">['.$archivo . ']</a><br />';               
                }
                else
                {
                    echo "<tr align='left' class='text-dark'>";
						echo "<td>";
							echo '<button type="button" class="btn btn-outline-primary bg-light btn-sm">';
                        	echo '<a target="_blank" href="'.$archivo.'"><strong>'.$archivo . '</strong></a><br />';
                    		echo '</button><br />';
                    	echo "</td>";
		            echo "</tr>";
                }
			} 
			echo "</table>";
		 ?>
  	  </div>
    </div>
  </div>
  <br>
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>