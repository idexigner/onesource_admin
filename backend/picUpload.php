<?php
//echo "Reacehed here";
    if(isset($_POST['submit'])){

    $picName=$_POST['picName']; 
   // $userId=$_POST['userId'];
    // Count total files
    $countfiles = count($_FILES['file']['name']);
   
    // Looping all files
    for($i=0;$i<$countfiles;$i++){
    // $filename = $_FILES['file']['name'][$i];
     $filename = $picName.$i.".jpg";
     
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'][$i],'../../inquiry_demo/upload/'.$filename);
    
    }
   }
   //echo "Done";
  // header('Location: http://1sourceestate.com/inquiry_demo?uid='.$userId);
  header('Location: http://localhost/onesource_admin/viewDetails.php');
?>


