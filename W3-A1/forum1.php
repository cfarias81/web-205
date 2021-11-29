<?php
class sample
{
    function user_def()
    {
        echo "user defined constructor";
    }
    function __construct()
    {
        echo "predefined constructor";
    }
}
$obj= new sample();
?>

