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
        $rand = rand(10000000, 99999999);

    //   echo trim($domain);
       $run=true;

           
           
                if($run === true){
                    include 'DBConfig.php';
                    // $con = mysqli_connect("localhost","root","","crime_management_system");
                    $query= "insert into users(name,fatherName,address,username,pass,email,contact,role,url) values('$name','$fatherName','$address', '$username','$pass','$email','$contact','$role','$rand')";

            }

           
        
       
        
        if(mysqli_query($con,$query)){
            ?>
 <script>
     alert("User is now Registered");
            </script>
            <?php
           
            echo "Data inserted";

            header("Location: http://localhost/onesource_admin/registerUser.php");
          
           
            

        }
        else{
            echo "Data Failed";
            
        }

       

    }


   
   


?>