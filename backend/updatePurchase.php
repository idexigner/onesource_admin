<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $p_id = $obj['p_id'];
     $pname = $obj['pname'];
     $pphone = $obj['pphone'];
     $pcareof = $obj['pcareof'];
     $prange = $obj['prange'];
     $psocietyName = $obj['psocietyName'];
     $ptype = $obj['ptype'];
     $pnature = $obj['pnature'];
     $parea = $obj['parea'];
     $pareaValue = $obj['pareaValue'];
     $ppayment = $obj['ppayment'];
     $pdown = $obj['pdown'];
     $pshedule = $obj['pshedule'];
     $pmonthly = $obj['pmonthly'];   
     $pfloorValue = $obj['pfloorValue'];
     $pfloorOther = $obj['pfloorOther'];
     $proom = $obj['proom'];
     $proomOther = $obj['proomOther'];
     $potherDetails = $obj['potherDetails'];
     $pnearby = $obj['pnearby'];
     $potherFacilites = $obj['potherFacilites'];
     $phealthFacilites = $obj['phealthFacilites'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("update purchase set name='$pname' , phone='$pphone' , careOf='$pcareof' , ranges='$prange' , societyName='$psocietyName' , type='$ptype' , nature='$pnature' , area='$parea' , areaUnit='$pareaValue' , payment='$ppayment' , downPayment='$pdown' , schedulePayment='$pshedule' , monthlyPayment='$pmonthly' , floor='$pfloorValue' , floorOther='$pfloorOther' , room='$proom' , roomOther='$proomOther' , otherDetail='$potherDetails' , nearby='$pnearby' , otherFacilities='$potherFacilites' , healthFacilities='$phealthFacilites' where p_id='$p_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
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


