<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $s_id = $obj['s_id'];
     $sname = $obj['sname'];
     $sphoneNumber = $obj['sphoneNumber'];
     $scareOf = $obj['scareOf'];
     $scompleteAddress = $obj['scompleteAddress'];
     $SsocietyName = $obj['SsocietyName'];
     $stype = $obj['stype'];
     $sDemand = $obj['sdemand'];
     $snature = $obj['snature'];
     $sarea = $obj['sarea'];
     $sareaDropValue = $obj['sareaDropValue'];
     $sDirectionValue = $obj['sDirectionValue'];
     $sfloorDropValue = $obj['sfloorDropValue'];
     $sfloorCheckOther = $obj['sfloorCheckOther'];   
     $sroom = $obj['sroom'];
     $sroomOther = $obj['sroomOther'];
     $sdocument = $obj['sdocument'];
     $sauthority = $obj['sauthority'];
     $spayment = $obj['spayment'];
     $spaymentOtherText = $obj['spaymentOtherText'];
     $sutility = $obj['sutility'];
     $sProject = $obj['sProject'];
     $sotherDetails = $obj['sotherDetails'];
     $snearby = $obj['snearby'];
     $sotherFacilites = $obj['sotherFacilites'];
     $shealthFacilites = $obj['shealthFacilites'];
     $spicName = $obj['spicName'];
     $spicNumber = $obj['spicNumber'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");

    //$result= $con->query("update sale set sname='$sname' where s_id='$s_id'");


    $result= $con->query("update sale set sname='$sname' ,sphoneNumber='$sphoneNumber' ,scareOf='$scareOf' ,scompleteAddress='$scompleteAddress'  ,ssocietyName='$SsocietyName'  ,stype='$stype'  ,sdemand='$sDemand',snature='$snature'  ,sarea='$sarea'  ,sareaDrop='$sareaDropValue'  ,sdirection='$sDirectionValue'  ,sfloor='$sfloorDropValue'  ,sfloorOther='$sfloorCheckOther'  ,sroom='$sroom'  ,sroomOther='$sroomOther'  ,sdocument='$sdocument'   ,sauthority='$sauthority'    ,spayment='$spayment'  ,spaymentOther1='$spaymentOtherText'  ,sutility='$sutility'  ,sproject='$sProject'  ,sotherDetails='$sotherDetails'  ,snearby='$snearby'  ,sotherFacilities='$sotherFacilites'  ,shealthFacilities='$shealthFacilites',spicName='$spicName', sPicNumber='$spicNumber' where s_id='$s_id'");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "Failed";
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


