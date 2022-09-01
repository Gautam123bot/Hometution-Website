<?php


include('conn.php');

        if(isset($_POST['send']))
        {
         $sql = "INSERT INTO contact(full_name, email, message)
            VALUES ('".$_POST["full_name"]."', '".$_POST["email"]."','".$_POST["message"]."')";

         $result = mysqli_query($conn,$sql);
         echo"<script>alert('Our Team Will Contact You Soon')</script>";
         echo"<script>window.location='about-us.php'</script>";
        }


?>