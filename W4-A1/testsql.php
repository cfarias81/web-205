<?php
    $link = mysqli_connect("localhost", "root", "", "mysql")
        or die("Could not connect: " . mysqli_connect_errno());
    print ("Connected successfully");
    mysqli_close($link);
?>