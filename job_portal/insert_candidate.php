<?php
		require_once("db_conn.php");
		extract($_REQUEST);
			mysqli_query($cn,"insert into candidate(degree,yop,university,splty,skills) VALUES('$deg','$poy','$uni','$spty','$skl')") or die("invalid Function");
			echo 'your insertion is completed';
			
		
?>