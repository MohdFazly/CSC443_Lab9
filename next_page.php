<?php
session_start();
echo "<html>";


$queryString = $_SERVER["QUERY STRING"];
echo "Query string of the incoming URL: ".$queryString ."\n";

echo "Cookies received: \n";
foreach ($_COOKIE as $name => $value)
{ 
    echo " $name = $value \n";
}


$myLogin = $_SESSION["myLogin"];
echo "Value of myLogin has been retrieved: ".$myLogin. "<br>";

$myColor = $_SESSION["myColor"];
echo "Value of MyColor has been retrieved: ".$myColor."<br>";

echo "</html>\n";

?>