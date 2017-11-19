<?php
session_start();
$q=$_POST['a'];
$w=$_POST['b'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$query="SELECT * from reg_user WHERE user_id='$q' AND password='$w'";
$result=mysql_query($query);
$name=mysql_fetch_array($result);
$n= $name['name'];
echo" <style>
    body
        {background-image: url(lavender-paper-texture.jpg);
            background-repeat: no-repeat;
            background-size:cover; 
        }
        <body>
    </body> 
    </style>";
if($name!=0)
{
    if(isset($_SESSION['user_id']))
{
  $q=$_SESSION['user_id'];
    $n=$_SESSION['name'];
    
}
    else{
        $_SESSION['user_id']=$q;
        $_SESSION['name'] = $n;
        header("location:index.php");
    }
   
    
echo"<center><h1><b>EASYTRAIN</b></h1></center>";
echo"<br>";
    echo"<font size='5'>";
    echo"<font color='RED'>";
echo"<center><b>Hiiii $n</b></center>";
echo"<br><br>";
echo"<center><a href='booking.php'><b><font color='ORANGE'>BOOK</b></a></center>"; echo"<br>";   
echo"<center><a href='trains.php'><b><font color='WHITE'>SHOW TRAINS</b></a></center>"; 
    echo"<br>";
echo"<center><a href='cancel.php'><b><font color='ORANGE'>CANCEL</b></a></center>";
     echo"<br>";
echo"<center><a href='showbooking.php'><b><font color='WHITE'>SHOW BOOKED TRAINS</b></a></center>";
 echo"<br>";
echo"<center><a href='logout.php'><b><font color='ORANGE'>LOGOUT</b></a></center>";
    
}
else
{
echo"<b><center><h2><font size='7'>Invalid user id or password</h2></center></b>";
echo"<br";
echo"<center><a href='index.php'><b><font color='ORANGE'><center><font size=''>BACK</center></b></a></center>";
}
?>