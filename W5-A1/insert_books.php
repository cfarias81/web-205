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
        $title =  $_POST['title'];
        $author = $_POST['author'];
        $year =  $_POST['year'];
        $pages = $_POST['pages'];
        $subject = $_POST['subject'];
        $summary = $_POST['summary'];
        $price = $_POST['price'];
        $similar = $_POST['similar'];
        
        
          
        // Performing insert query execution
        
        $sql = "INSERT INTO ass2  VALUES ('$title','$author','$year','$pages','$subject','$summary','$price','$similar' )";
                //         ,'$summary'
        if(mysqli_query($conn, $sql)){
            //pop up to inform the result was sucessfully done
            echo "<script type='text/javascript'>alert('The Book was successfully registered !')</script>";
           
            // header('location:index.php'); command to stay in the same page
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