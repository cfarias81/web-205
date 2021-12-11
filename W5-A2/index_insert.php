<html>
    <head>
        <meta charset="utf-8">
	    <title>Welcome to week 5</title>
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index_search.php"><li>Search Users</li></a>
                    <a href="index_insert.php"><li>Insert Users</li></a>
                   

                </ul>
            </nav>
            <section>
            <h1>Insert Users</h1>
            <hr><br><br>

            <form method="post" action="insert_users.php">
                <input type="submit" name="insert" value="Insert" class="btn">
                <input type="reset" value="Reset" class="btn">
                <br><br>

                First Name<br>
                <input type="text" name="first_name" class="field" maxlenght="20"  autofocus><br>

                Last Name<br>
                <input type="text" name="last_name" class="field" maxlenght="30"  ><br>
                
                
                E-mail<br>
                <input type="email" name="email" class="field" maxlenght="30"  ><br>
                 
               
                 <!--Write your comments here  -->
                
                

                
            </form>

            </section>
        </div>
        <?php
            
        ?>
    </body>
</html>
