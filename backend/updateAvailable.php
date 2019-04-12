<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

     $a_id = $obj['a_id'];
     $aname = $obj['aname'];
     $aphoneNumber = $obj['aphoneNumber'];
     $acareOf = $obj['acareOf'];
     $acompleteAddress = $obj['acompleteAddress'];
     $asocietyName = $obj['asocietyName'];
     $atype = $obj['atype'];
     $aDemand = $obj['aDemand'];
     $anature = $obj['anature'];
     $aarea = $obj['aarea'];
     $aareaValue = $obj['aareaValue'];
     $aDirectionValue = $obj['aDirectionValue'];
     $afloorValue = $obj['afloorValue'];
     $afloorOther = $obj['afloorOther'];   
     $aroom = $obj['aroom'];
     $aroomOther = $obj['aroomOther'];
     $adocument = $obj['adocument'];
     $aauthority = $obj['aauthority'];
     $autility = $obj['autility'];
     $aProject = $obj['aProject'];
     $aotherDetails = $obj['aotherDetails'];
     $anearby = $obj['anearby'];
     $aotherFacilites = $obj['aotherFacilites'];
     $ahealthFacilites = $obj['ahealthFacilites'];
     $aDues = $obj['aDues'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("update available_rent set aname='$aname',aphoneNumber='$aphoneNumber',acareOf='$acareOf',acompleteAddress='$acompleteAddress',asocietyName='$asocietyName',atype='$atype',aDemand='$aDemand',anature='$anature',aarea='$aarea',aareaDrop='$aareaValue',aDirection='$aDirectionValue',afloor='$afloorValue',afloorOther='$afloorOther',aroom='$aroom',aroomOther='$aroomOther',adocument='$adocument',aauthority='$aauthority',autility='$autility',aProject='$aProject',aotherDetails='$aotherDetails',anearby='$anearby',aotherFacilities='$aotherFacilites',ahealthFacilities='$ahealthFacilites',aDues='$aDues' where a_id='$a_id'");
	
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


