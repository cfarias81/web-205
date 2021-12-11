<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "week5");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $first_name =  $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email =  $_POST['email'];
        $id = "";
        
        
          
        // Performing insert query execution
        
        $sql = "INSERT INTO users  VALUES ( NULL,'$first_name','$last_name','$email')";
                //         ,'$summary'
        if(mysqli_query($conn, $sql)){
            
            echo "<script type='text/javascript'>alert('The User was successfully registered !')</script>";
           
            // header('location:index.php');
                //echo nl2br("\n$title\n ");
                
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        
       
        ?>
        <ul class="menu">
                    <!--<a href="index.php"><li>Return</li></a>
                     <a href="search.php"><li>Search Book</li></a>-->
                     <br>
                     <br>
                     <br>
                    <button><a href="index_insert.php"><li>Return</li></a></button>

                </ul> 
    </center>
</body>
  
</html>