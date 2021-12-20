<html>
    <head>
        <center>
        <h1>Final term question 2 </h1>
        </center>
    </head>

    <body>
        <center>
        <?php

            $theData = file("phonebook.txt");

            print "<TABLE BORDER='1'>\n";

            foreach ($theData as $line) {
                $line = rtrim($line);
                list($name, $phone, $email) = explode(',', $line);
                print "<TR><TD> $name <TD> $phone <TD> $email \n";
            }
            ?>
            </TABLE>  


        </center>
    </body>

</html>