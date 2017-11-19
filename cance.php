<?php
$pnr=$_POST['a'];
$tick=$_POST['b'];
session_start();
if(isset($_SESSION['user_id']))
{
    $u_id=$_SESSION['user_id'];
}
mysql_connect("localhost","root","");
mysql_select_db("irctc");


$query3="SELECT tno,noseats FROM booking WHERE pnr='$pnr'";
echo" <style>
    body
        {background-image: url(k.jpg);
            background-repeat: no-repeat;
            background-size:cover;
   
            
        
        }
        <body>
    </body> 
    </style>";
echo"<center><h1><b><font size='7'>EASYTRAIN</b></h1></center>";
echo"<br>";
$res=mysql_query($query3);
$seat=mysql_fetch_array($res);
$s=$seat['noseats'];
$t_no=$seat['tno'];
$ns=$s-$tick;
if($ns==0)
{
    $query5="DELETE FROM booking WHERE pnr ='$pnr'";
    mysql_query($query5);
    $query="SELECT seats from traindetails WHERE tno='$t_no'";
$result=mysql_query($query);
$sea=mysql_fetch_assoc($result);
$n= $sea['seats'];
$m=$n+$tick;
    $query2="UPDATE traindetails SET seats='$m' WHERE tno='$t_no'";
mysql_query($query2);
     echo"<center><b><font size='6' color='RED'>Successfully Deleted</b><center>";
}
else if($ns>0)
{
$query4="UPDATE booking SET noseats='$ns' WHERE pnr='$pnr'";
mysql_query($query4);
$query="SELECT seats from traindetails WHERE tno='$t_no'";
$result=mysql_query($query);
$sea=mysql_fetch_assoc($result);
$n= $sea['seats'];
$m=$n+$tick;

$query2="UPDATE traindetails SET seats='$m' WHERE tno='$t_no'";
mysql_query($query2);
     echo"<center><b><b><font size='6' color='RED'>Successfully Deleted</b><center>";
}
else
    echo"<center><b><b><font size='6' color='RED'>Invalid pnr or seats entry</b><center>";
echo"<br>";
echo"<center><a href='cancel.php'><b><font color='BLUE'>BACK</b></a></center>";
 echo"<br>";
echo"<center><a href='log.php'><b>
<font color='ORANGE'>HOME</b></a></center>";
 echo"<br>";
echo"<center><a href='logout.php'><b><font color='GREEN'>LOGOUT</b></a></center>";
?>