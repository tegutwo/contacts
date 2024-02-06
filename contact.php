<?php
    $conn =mysqli_connect("localhost","root","","contacts");
    
    if (mysqli_connect_errno()) {
        echo"". mysqli_connect_error();
        die("The Database failed to connecet with Error: ". mysqli_connect_error());
    }
    else{
        echo "Connected Successfully";
    }
    if(isset($_POST['Submit'])){ //check if form was submitted
        $first = $_POST['First'];
        $last = $_POST['Last'];
        $email = $_POST['Email'];
        $mobile = $_POST['Mobile'];
        $fax = $_POST['Fax'];
        $web = $_POST['Web'];

        $q = "INSERT INTO contactinfo (first,last,fax,email,mobile,web) VALUES('$first','$last','$fax','$email','$mobile','$web')";

        if( mysqli_query($conn, $q)== true){
          echo "<h1> Created User $first </h1>";
        }
        else{
         echo "Error adding user $first to database".$q."". mysqli_error($conn);
        }
      }  
    mysqli_close($conn);
?>
     
