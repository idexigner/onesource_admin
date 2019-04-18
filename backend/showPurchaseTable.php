<?php 
include 'DBConfig.php';
// Create connection


	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);


   
	$u_id = $obj['u_id'];
	$role = $obj['role'];
	// $q = "SELECT p_id,date,name,phone,ranges,societyName,type FROM purchase";
	if($role=="admin"){
		$q = "SELECT p.p_id,p.date,p.name as inqName,p.phone,p.ranges,p.societyName,p.type,u.name as userName FROM purchase as p inner join users as u on p.u_id=u.u_id";
	}
	else{
		$q = "SELECT p_id,date,name,phone,ranges,societyName,type FROM purchase where u_id='$u_id'";
	}
	

	//$result= $con->query("SELECT * FROM purchase");
	$result= $con->query($q);
	
		if($result->num_rows>0){

            while($row[] = $result->fetch_assoc()) {

                $tem = $row;
                
                $json = json_encode($tem);
                
                }
                echo $json;	
		}
		else
		{		
		    echo  json_encode('No Data'); // alert msg in react native

		}
	
	
?>