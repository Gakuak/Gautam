
<html>
<head>
	     <script src="jquery-3.2.1.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap.css" />
  <style>
  	#d1{
		border-radius:  25px;
		text-align: center;
		box-shadow:  5px 10px #9194c6;
	}
	input[type=button]{
		
		width: 50%;
		border-radius:  25px;
		margin-top: 25px;
	}

		body{
				background-image: url('mitchel-lensink-251511.jpg');
    			background-size: 1600px 1000px;
    			margin: 0px;
    			padding: 0px;
    			top: 0px;
			}
			.dd1:nth-child(even){
				
				background-color: hotpink;
			}
			.dd1:nth-child(odd){
				
				background-color: lightgreen;
			}
  </style>
  <script>
  	$(function(){
  		$(".b1").click(function(){
  				 var id=$(this).siblings().eq(0).text();
	           		           $(".t1").html(id);
	           		           
	           		var id1=$(this).siblings().eq(1).text();
	           		           $(".t2").html(id1);
	           		           
	           		var id2=$(this).siblings().eq(2).text();
	           		           $(".t3").html(id2);
	           		var id3=$(this).siblings().eq(3).text();
	           		           $(".t4").html(id3);
	           		 var id4=$(this).siblings().eq(4).text();
	           		           $(".t5").html(id4);
	           		 var id5=$(this).siblings().eq(5).text();
	           		           $(".t6").html(id5);                    
	           		 var id6=$(this).siblings().eq(6).text();
	           		           $(".t7").html(id6);
	           		var id7=$(this).siblings().eq(7).text();
	           		           $(".t8").html(id7);
	           		var id8=$(this).siblings().eq(8).text();
	           		           $(".t9").html(id8);
            		var id9=$(this).siblings().eq(9).text();
           		           $(".t10").html(id9);
	           		 var id10=$(this).siblings().eq(10).text();
	           		           $(".t11").html(id10);
	           		 var id11=$(this).siblings().eq(11).text();
	           		           $(".t12").html(id11);
	           		  var id12=$(this).siblings().eq(12).text();
	           		           $(".t13").html(id12);
	           		 var id13=$(this).siblings().eq(13).text();
	           		 			$(".t14").html(id13);
			});
  	});
  	
  </script>
 
</head>
<body>
	<?php
	  require_once("db_conn.php");
	   $rs = mysqli_query($cn,"select * from jobs") or die("Invalid Table");
	?>  
	  
	      <?php
       while($r=(mysqli_fetch_array($rs)))
       {
	   	
	   	?>
	  
	  	<!--<div class="container">--> 
  	 <div id="d1" class="jumbotron col-lg-3 dd1" style="border:2px dotted black; margin-left:70px ; margin-right:10px ;" > 
	  	  	<!--0--><h3 hidden="" >Id:<?php echo $r[0]; ?> </h3>
	  	  	<!--1--><h3>Title:<?php echo $r[1]; ?> </h3>
	  	  	<!--2--><h3>Profile:<?php echo $r[2]; ?></h3>
	  	  	<!--3--><h3>Company:<?php echo $r[3]; ?></h3>
	  	  	<!--4--><h3>Eligibility:<?php echo $r[4]; ?></h3>
	  	  	<!--5--><h3 hidden="" >Opening:<?php echo $r[5]; ?></h3>
	  	  	<!--6--><h3 hidden="" >Launch date:<?php echo $r[6]; ?></h3>
	  	  	<!--7--><h3 hidden="" >Close date:<?php echo $r[7]; ?></h3>
	  	  	<!--8--><h3 hidden="" >Location:<?php echo $r[8]; ?></h3>
	  	  	<!--9--><h3 hidden="" >Interview date:<?php echo $r[9]; ?></h3>
	  	  	<!--10--><h3 hidden="" >Interview time:<?php echo $r[10]; ?></h3>
	  	  	<!--11--><h3 hidden="" >Status:<?php echo $r[11]; ?></h3>
	  	  	<!--12--><h3 hidden="" >Salary range:<?php echo $r[12]; ?></h3>
	  	  	<!--13--><h3 hidden="" >Age:<?php echo $r[13]; ?></h3>
	  	  	
	  	  <input type="button"   class="b1" name="b1" value="submit" data-toggle="modal" data-target="#myModal" />  
	  	  </div>
	  	  <?php
	  	  }
	  	  ?>
	  <div class="modal fade" id="myModal">
         <div class="modal-dialog">
    
      <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="t4"></h3>
                   <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body" id="div" >
                  <h3 class="t1" >Id: </h3>
                  <h3 class="t2" >Title: </h3>
	  	  	      <h3 class="t3" >Profile:</h3>
	  	  	      <h3 class="t4" >Company:</h3>
	  	  	      <h3 class="t5" >Eligibility:</h3>
	  	  	      <h3 class="t6" >Opening: </h3>
	  	  	      <h3 class="t7" >Launch date:</h3>
	  	  	      <h3 class="t8" >Close date:</h3>
	  	  	      <h3 class="t9" >Location:</h3>
	  	  	      <h3 class="t10" >Interview date: </h3>
	  	  	      <h3 class="t11" >Interview time:</h3>
	  	  	      <h3 class="t12" >Status:</h3>
	  	  	      <h3 class="t13" >Salary range:</h3>
	  	  	      <h3 class="t14" >Age:</h3>
              </div>
           </div>
        
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
      </div>
      
    </div>
</body>
</html>