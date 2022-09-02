<?php


include('conn.php');

        if(isset($_POST['submit']))
        {
         $sql = "INSERT INTO enquiry_side(name, phone, email, message)
            VALUES ('".$_POST["name"]."', '".$_POST["phone"]."','".$_POST["email"]."','".$_POST["message"]."')";

         $result = mysqli_query($conn,$sql);
         echo"<script>alert('Done! Your Enquiry has been reached to us. We will get touch to you soon..........')</script>";
         echo"<script>window.location='contact-us.php'</script>";
        }


?>