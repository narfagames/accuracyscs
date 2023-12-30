<?php
$server = "bljvi8izdfsqurtiwlnz-mysql.services.clever-cloud.com";
$username = "ufc6hrwrcpv1iohv";
$password = "gcd0i2mvkwlVUh2EJD4a";
$db = "bljvi8izdfsqurtiwlnz";

$connect = new mysqli($server,$username,$password,$db);
        $USUARIO = 'nruiz';
        $result = mysqli_query($connect,"SELECT * FROM T_M_USER WHERE usuario='$USUARIO'");
        $qCol= mysqli_field_count($connect);
    echo $qCol."!";

    while ($row = mysqli_fetch_array($result)) 
    {
    for($i=0;$i<$qCol;$i++)
        {
        echo $row[$i]."!";
        }
    }
?>
