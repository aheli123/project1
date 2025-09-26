<?php
    $servername="sql307.infinityfree.com";
    $username="if0_36446122";
    $password="Aheli12345";
    $dbname="if0_36446122_gmri";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
        {
            die("connection failed:". $conn->connect_error);
        }
        // echo "connect successfully";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $a=$_POST["name"];
        $b=$_POST["email"];
        $c=$_POST["ph"];
        $d=$_POST["doctor"];
        $e=$_POST["date"];
        }
       
        $sql="INSERT INTO `APPOINTMENT` (`NAME`, `PH`, `EMAIL`, `DOCTOR`, `APP_DATE`) VALUES ('$a','$c','$b','$d','$e');";
            $rs = mysqli_query($conn, $sql);


if($rs)
{
  header("Location: http://gmri.free.nf/succ.html");
}   
else
{
    header("Location: http://www.gmri.free.nf/fail.html");
} 
//echo $rs;
           
            mysql_close($conn);
?>
               
            