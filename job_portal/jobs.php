<?php
 require_once("db_conn.php");
 $title=$_REQUEST["title"];
 $prof=$_REQUEST["prof"];
 $comp=$_REQUEST["comp"];
 $elig=$_REQUEST["elig"];
 $open=$_REQUEST["open"];
 $ld=$_REQUEST["ld"];
 $cd=$_REQUEST["cl1"];
 $location=$_REQUEST["location"];
 $interd1=$_REQUEST["inter1"];
 $interd2=$_REQUEST["inter2"];
 $status=$_REQUEST["status"];
 $salary=$_REQUEST["salary"];
 $age=$_REQUEST["age"];
	 mysqli_query($cn,"insert into jobs(title,profile,company,eligiblity,openings,launchdate,closingdate,location,interviewdate,interviewtime,status,salaryrange,age) values('$title','$prof','$comp','$elig','$open','$ld','$cd','$location','$interd1','$interd2','$status','$salary','$age')") or die("Invaldi Table") ;
 echo "Insertions SuccessFul";
?>