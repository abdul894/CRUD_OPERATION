<?php

include "connection.php";

if(isset($_POST['addUsers'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    mysqli_query($con, "INSERT INTO crudoperation(name, address, phone, email) VALUES('$name','$address','$phone','$email')");

    echo "<script>
        alert('Data Inserted');
        location.assign('index.php');
    </script>";

}

?>
