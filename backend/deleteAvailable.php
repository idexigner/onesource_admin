<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $a_id = $obj['a_id'];
     


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("delete from available_rent where a_id='$a_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Unsuccesfull";
			}


		// if($result->num_rows>0){

        //     while($row[] = $result->fetch_assoc()) {

        //         $tem = $row;
                
        //         $json = json_encode($tem);
                
        //         }
        //         echo $json;	
		// }
		// else
		// {		
		//     echo  json_encode('No Update'); // alert msg in react native

		// }
	

?>


