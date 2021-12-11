
<html>
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "week5");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$title=  $_POST['title'];
$author = $_POST['author'];
$year =  $_POST['year'];
//Attempt select query execution
$sql = "SELECT * FROM ass2 WHERE title='$title' OR author='$author' or year='$year'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                //echo "<th>id</th>";
                echo "<th>title</th>";
                echo "<th>author</th>";
                echo "<th>Year</th>";
                echo "<th>Pages</th>";
                echo "<th>Subject</th>";
                echo "<th>Summary</th>";
                echo "<th>Price</th>";
                echo "<th>Similar</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               // echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['pages'] . "</td>";
                echo "<td>" . $row['subject'] . "</td>";
                echo "<td>" . $row['summary'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['similar'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching this name were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>
<br>
<button><a href="index_search.php"><h3>Return to previews page</h3></a></button>
</html>
