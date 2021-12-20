<html>
    <head>
        
        <h1>Final term question 5 </h1>
        
    </head>

    <body>
        <style>
            body {
                padding: 100px;
                background-color: powderblue;}
            h1   {color: blue;
                    text-align: center;
            }
            p    {color: red;}

        </style>

                    <?php

                        //____ START FUNCION
                        echo "STEP ZERO: START SCRIPT: OK! <br>";

                        _reaFile();

                        function _reaFile(){
                            $theData = file("phonebook.txt");

                            //____ CONNECT DB
                            $conn = _getDBConfig();

                            //____ CREATE TABLE IF
                            _createTable($conn);

                            foreach ($theData as $line) {
                                echo "STEP READ FILE: OK! <br>";

                                $line = rtrim($line);
                                list($name, $phone, $email) = explode(',', $line);

                                $data = [
                                    'name'   => $name,
                                    'phone'  => $phone,
                                    'email'  => $email,
                                ];

                                _insertLineTable($conn, $data);

                            }

                            echo "<br>ALL STEPS COMPLETED!<br>";
                        }

                        function _createTable($conn){
                            echo "STEP TWO: CREATE TABLE PHONE: OK!<br>";

                            // CHECK TABLE IF EXIST
                            _checkTableIfExists($conn);

                            // CREATE TABLE
                            $query = "CREATE TABLE phonebook_619 ( ID int(11) AUTO_INCREMENT
                                                                ,  NAME varchar(20) NOT NULL
                                                                ,  PHONE varchar(20) NOT NULL
                                                                ,  EMAIL varchar(20) NOT NULL
                                                                ,  PRIMARY KEY  (ID))";

                            
                            return $conn->query($query);
                        }

                        function _checkTableIfExists($conn){
                            echo "STEP THREE: CHECK TABLE IF EXIST: OK!<br>";

                            $sql = "SELECT ID FROM phonebook_619";

                            $result = $conn->query($sql);

                            //
                            if($result) {
                                echo "STEP FOUR: DROP TABLE: OK!<br>";

                                $query = "DROP TABLE phonebook_619";

                                $conn->query($query);
                            }
                        }

                        function _insertLineTable($conn, $data){
                            echo "STEP FIVE: INSERT DATA: OK!$data[name]..............$data[phone]...............$data[email]<br>";

                            $sql = "INSERT into phonebook_619 (name, phone, email) values ('$data[name]','$data[phone]', '$data[email]')";
                            $conn->query($sql);
                        }

                        // WEB.CONFIG example
                        function _getDBConfig(){
                            echo "STEP ONE: GET DATA BASE ACCESS: OK!<br>";

                            $xml =  simplexml_load_file("web.config") or die("Error: Cannot create object"); 

                            $fullString = ($xml->connectionStrings->add[0]["connectionString"]);
                            $strArr     = explode(";", $fullString);

                            $arrCount = count($strArr);
                            $connArr[]="";
                            
                            for($x=0;$x<$arrCount-1;$x++){
                                $aS = explode("=",$strArr[$x]);
                                $connArr+=array(strtolower(trim($aS[0])) => trim($aS[1]));
                            }
                            
                            $response = new PDO("mysql:host={$connArr["server"]};
                            dbname={$connArr["database"]}",  $connArr["user id"],$connArr["password"],
                            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));

                            return $response;

                        }

                    ?>
                    
    </body>

</html>