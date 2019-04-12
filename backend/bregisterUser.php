<?php


session_start();



    if(isset($_POST['submit'])){

        $name =  $_POST['name'];
        $fatherName =  $_POST['fatherName'];
        $address =  $_POST['address'];
       

        $username =  $_POST['username'];
        $pass =  $_POST['pass'];
        $email =  $_POST['email'];
        $contact =  $_POST['contact'];
        $role =  $_POST['role'];

    //   echo trim($domain);
       $run=true;

                // if(empty($username) || empty($pass) || empty($email) || empty($contact)){
                //     $run=false;
                //     $msg='Field is Empty';

                // }else if(preg_match('/[#!@%$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $username) || preg_match('/[#!@%$qwertyuiiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $contact)  ){
                //     $run=false;
                //     $msg='Invalid Input';
                // }   
                    
           
                if($run === true){
                    include 'DBConfig.php';
                    // $con = mysqli_connect("localhost","root","","crime_management_system");
                    $query= "insert into users(name,fatherName,address,username,pass,email,contact,role) values('$name','$fatherName','$address', '$username','$pass','$email','$contact','$role')";

            }

           
        
       
        
        if(mysqli_query($con,$query)){
            echo "Data inserted";
            // $message="Successfully Inserted";
            // echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
            // echo "<script type='text/javascript'>console.log('Sucasdcessfully Inserted');</script>";
            // sleep(2);
            // $msg='Successfull Submitted';
            // header("Location:../registerUser.php?msg=".$msg);
            // if(preg_match('/^[\w]+$/', $String)){
            //      header("Location:../domain.php");
            // }
            // else{
            //     $msg='Invalid Domainss';
            // header("Location:../domain.php?msg=".$msg);

            // }
           
            

        }
        else{
            echo "Data Failed";
            //   $msg='Invalid Domains';
            // header("Location:../registerUser.php?msg=".$msg);
            
            // header("Location:../domain.php");
            // exit();
            //  $message="Data Failed to Insert";
            //  
            // echo "<script type='text/javascript'>alert('Data Failed to Insert');</script>";
            //
        }

        // mysql_query("");


// create TABLE tbl_create_emergency(id int primary key AUTO_INCREMENT, locationTitle varchar(255), locationAddress varchar(255),
// locationType varchar(255),severity varchar(255), landlordName varchar(255), landlordContact varchar(255), latitude varchar(255), 
// longitude varchar(255))

    }


    function ContainsNumbers($String){
    return preg_match('/^[\w]+$/', $String) > 0;
}

   


?>