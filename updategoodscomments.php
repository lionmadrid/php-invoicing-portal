<?php
    include_once("dbconfig.php");    
 
 


    //get search term
//print_r($_POST);

if(isset($_POST['action']) && $_POST['action'] == 'invoicecomment' ){
	
	$invoice_id = $_POST['invoice_id'];
	$invoicecomments  = $_POST['invoicecomments'];
	$query = "Update ws_goodservice_invoice_master set invoicecomments = '$invoicecomments' WHERE id = $invoice_id ";
	mysqli_query($_SERVER['con'],$query);
}	
 


if(isset($_POST['action']) && $_POST['action'] == 'savevendorinvoice' ){
	
	$invoice_id = $_POST['invoice_id'];
	$vendorinvoice  = $_POST['vendorinvoice'];
	$query = "Update ws_goodservice_invoice_master set vendorinvoice = '$vendorinvoice' WHERE id = $invoice_id ";
	mysqli_query($_SERVER['con'],$query);
}
	

?>
