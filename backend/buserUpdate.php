<?php


session_start();

// if(@$_SESSION['LOGIN_ID']=="")
// {
//     unset($_SESSION['LOGIN_ID']);
//     echo "<script>window.location.href='index.php'</script>";
// }
if(isset($_POST['submit2'])){
       $id= $_POST['userId'];
         include 'DBConfig.php';
         $query="delete from users where u_id=$id";

         if(mysqli_query($con,$query)){
            // echo "Data inserted";
            // $message="Successfully Inserted";
            // echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
            // echo "<script type='text/javascript'>console.log('Sucasdcessfully Inserted');</script>";
            // sleep(2);
            header("Location:../viewUser.php");
            

        }
        else{
            header("Location:../viewUser.php");
            //  $message="Data Failed to Insert";
            //  sleep(2);
            // echo "<script type='text/javascript'>alert('Data Failed to Insert');</script>";
            // echo "Data Failed";
        }
}

    if(isset($_POST['submit'])){

        $id= $_POST['userId'];
        $username =  $_POST['username'];
        $pass =  $_POST['pass'];
        $email =  $_POST['email'];
        $contact =  $_POST['contact'];
        
       
        if(!empty($username)){

            include 'DBConfig.php';
            // $con = mysqli_connect("localhost","root","","crime_management_system");
            // $query= "insert into ev_domain(domain) values('$domain')";
            $query= "update users SET username='$username',pass='$pass',email='$email',contact='$contact' WHERE u_id=$id";
            // $query= "update ev_domain SET domain='Educatouinssss' WHERE domain_id=5";
            // echo "<script type='text/javascript'>console.log('$domain + $domainId');</script>";
        }if(mysqli_query($con,$query)){
            // echo "Data inserted";
            // $message="Successfully Inserted";
            // echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
            // echo "<script type='text/javascript'>console.log('Sucasdcessfully Inserted');</script>";
            // sleep(2);
            header("Location:../viewUser.php");
            

        }
        else{
            header("Location:../viewUser.php");
            //  $message="Data Failed to Insert";
            //  sleep(2);
            // echo "<script type='text/javascript'>alert('Data Failed to Insert');</script>";
            // echo "Data Failed";
        }

        // mysql_query("");


// create TABLE tbl_create_emergency(id int primary key AUTO_INCREMENT, locationTitle varchar(255), locationAddress varchar(255),
// locationType varchar(255),severity varchar(255), landlordName varchar(255), landlordContact varchar(255), latitude varchar(255), 
// longitude varchar(255))

    }
   


?>