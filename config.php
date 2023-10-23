<?php		

if ( !defined( 'ACCESS' ) ) {
     echo '<script>
               var userResponse = alert("Direct Access Not Allowed");
               if (confirm("Click OK to proceed.")) {
                    window.location.href = "index.php"; 
               }     
          </script>'; 
} else {
     
     $servername = "localhost";
     $username = "root";
     $password = "";
     
     // Create connection
     $conn = new mysqli($servername, $username, $password);
     
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }else{
          echo "Connected successfully";
     }

}
