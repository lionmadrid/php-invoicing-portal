<?php
include_once("head.php"); 
//include_once("logincheck.php");
 

if(isset($_GET['action']) && $_GET['action']=='delete'){
//print_r($_GET);
	$id = $_GET['id'];
	  $sqldelete = "DELETE from prefixmaster where id=$id";
	mysqli_query($_SERVER['con'],$sqldelete); 
	header("Location:prefixmasterlist.php");
	exit(0);
}	
?>
<link href="css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="js/bootstrap-toggle.min.js"></script>
 
<script type="text/javascript" src="jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />
 
  
<div class="container">
 
       <form method="post"  role="form"   action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
 
  <div class="panel-group">
 
    <div class="panel panel-primary">
      <div class="panel-heading">Prefix information  </div>
      <div class="panel-body">

	  
 

		<div class="row">
		

      		     <label>     Prefix  </label>   
					<input name="prefix"  class="form-control"   type="text"   placeholder="Enter prefix"  required> 
	      </div>
			<div class="row">
			 <label>     Description  </label>   
				<input name="description"  class="form-control"   type="text"   placeholder="Enter description"  required> 
			</div>
			
			<div class="row">
			<br>
				<button type="submit" name="submit" class="btn btn-primary">Save</button>
			</div>				
			  
	 </div> </div> <!-- panel close -->
 </div>

 </form>


<?php
 
   

function savedb(){
/// echo "<pre>";	print_r($_POST);
	 $company_id = 1; //$_POST['company_id'];
	 $prefix  = mysqli_escape_string( $_SERVER['con'],$_POST['prefix']);
	 $description  = mysqli_escape_string($_SERVER['con'],$_POST['description']);
	
       $sqlupdt =  "INSERT INTO prefixmaster (company_id,prefix,description) VALUES ($company_id,'$prefix', '$description')";

		mysqli_query($_SERVER['con'],$sqlupdt); 
		sleep(5);
	 	mysqli_close($_SERVER['con']);
	 	header("Location:prefixmasterlist.php");
	 	exit(0);
	
  
}
if(isset($_POST['submit']))
	savedb();

?>


</div>

<body>
<html>
