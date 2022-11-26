<?php

require 'connection.php';

if(isset($_POST["SUBMIT"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];

    $query="INSERT INTO tbl_data VALUES('','$name','$email','$latitude','$longitude')";
    mysqli_query($conn,$query);
    echo
    "
      <script>
      alert('Data added successfully');
      document.location.href='data.php';
      </script>
      "
      ;
      


}
?>