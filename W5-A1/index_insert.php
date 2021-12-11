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
            <h1>Register Book</h1>
            <hr><br><br>

            <form method="post" action="insert_books.php">
                <input type="submit" name="save" value="save" class="btn">
                <input type="reset" value="Reset" class="btn">
                <br><br>

                Title<br>
                <input type="text" name="title" class="field" maxlenght="50" required autofocus><br>

                Author<br>
                <input type="text" name="author" class="field" maxlenght="40" required ><br>
                
                
                Year<br>
                <input type="number" name="year" class="field" maxlenght="4" required ><br>
                
                Pages<br>
                <input type="number" name="pages" class="field" maxlenght="11" required ><br>
                
                
                Subject<br>
                <input type="text" name="subject" class="field" maxlenght="50" required ><br>
                
                Summary<br>
                <input type="text" name="summary" class="field" maxlenght="100" required ><br>
                  
                Price<br>
                <input type="number" name="price" class="field" maxlenght="40" required ><br>
                 
                Similar<br>
                <input type="text" name="similar" class="field" maxlenght="40" ><br>
                 
               
                 <!-- Write your comments here  -->
                
                

                
            </form>

            </section>
        </div>
        <?php
            
        ?>
    </body>
</html>
