<?php 
include 'DBConfig.php';
// Create connection


	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);


	 $u_id = $obj['u_id'];
	 $role = $obj['role'];
 
	 if($role=="admin"){
		 $q = "SELECT s_id,sname,sphoneNumber,scompleteAddress,ssocietyName,sdemand,stype,sdirection,date FROM sale";
	 }
	 else{
		 $q = "SELECT s_id,sname,sphoneNumber,scompleteAddress,ssocietyName,sdemand,stype,sdirection,date FROM sale where u_id='$u_id'";
	 }
	

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