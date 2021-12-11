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
                    <a href="index_insert.php"><li>Register Book</li></a>
                    <a href="index_search.php"><li>Search Book</li></a>

                </ul>
            </nav>
            <section>
            <h1>Search Books</h1>
            <hr><br><br>

            <form method="post" action="select_books.php">
                <input type="submit" name="search" value="Search" class="btn">
                <input type="reset" value="Reset" class="btn">
                <br><br>

                Title<br>
                <input type="text" name="title" class="field" maxlenght="20"  autofocus><br>

                Author<br>
                <input type="text" name="author" class="field" maxlenght="30"  ><br>
                
                
                Year<br>
                <input type="num" name="year" class="field" maxlenght="30"  ><br>
                 
               
                 <!--Write your comments here  -->
                
                

                
            </form>

            </section>
        </div>
        <?php
            
        ?>
    </body>
</html>
