<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $r_id = $obj['r_id'];
     $rname = $obj['rname'];
     $rphoneNumber = $obj['rphoneNumber'];
     $rcareOf = $obj['rcareOf'];
     $rrange = $obj['rrange'];
     $rsocietyName = $obj['rsocietyName'];
     $rtype = $obj['rtype'];
     $rarea = $obj['rarea'];
     $rareaValue = $obj['rareaValue'];
     $rfloorValue = $obj['rfloorValue'];
     $rfloorOther = $obj['rfloorOther'];
     $rroom = $obj['rroom'];
     $rroomOtherText = $obj['rroomOtherText'];
     $rotherDetails = $obj['rotherDetails'];   
     $rnearby = $obj['rnearby'];
     $rotherFacilites = $obj['rotherFacilites'];
     $rhealthFacilites = $obj['rhealthFacilites'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("update required_rent set rname='$rname' ,rphoneNumber='$rphoneNumber',rcareOf='$rcareOf',rrange='$rrange',rsocietyName='$rsocietyName',rarea='$rarea',rareaDrop='$rareaValue',rtype='$rtype',rfloor='$rfloorValue',rfloorOther='$rfloorOther',rroom='$rroom',rroomOther='$rroomOtherText',rOtherDetails='$rotherDetails',rnearby='$rnearby',rotherFacilities='$rotherFacilites',rhealthFacilities='$rhealthFacilites' where r_id='$r_id'");
	
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


