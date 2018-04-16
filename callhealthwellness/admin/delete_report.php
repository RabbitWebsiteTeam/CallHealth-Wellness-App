<?php
session_start();
require_once('config.php');
 if(!isset($_SESSION['email']) && $_SESSION['email'] == '') { 
    header("Location: login.php");
}



//$sql="delete from branches where id=".$_POST['branchid'];
	 $sql = "DELETE FROM registerdata WHERE id = ".$_REQUEST['id'];
	$result=$conn->query($sql);
	if($result){
		$sql1 = "DELETE FROM registerdata WHERE registerId = ".$_REQUEST['id'];
		$result=$conn->query($sql1);
	}
	
header("location:view_reports.php");

?>