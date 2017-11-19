<?php
session_start();
if(isset($_SESSION['user_id']))
{
    $u_id=$_SESSION['user_id'];
}
$q=$_POST['a'];
$w=$_POST['b'];
$e=$_POST['c'];

$t=$_POST['d'];

$r=$_POST['e'];
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$query="SELECT seats from traindetails WHERE tno='$r'";
$result=mysql_query($query);
$seats=mysql_fetch_assoc($result);
$n= $seats['seats'];
$m=$n-$t;
if($n<$t)
echo"<center><b>Not sufficient seats available in that train. Sorry for the inconvineance.</b></center>";
else
{
    $query1="UPDATE traindetails SET seats='$m' WHERE tno='$r'";
    mysql_query($query1);
    $query2="SELECT tname,source,des,fair FROM traindetails WHERE tno='$r'";
    $res=mysql_query($query2);
    $data=mysql_fetch_assoc($res);
    $tname=$data['tname'];
    $source=$data['source'];
    $des=$data['des'];
    $fair=$data['fair'];
    $query3="INSERT INTO `irctc`.`booking` (`pnr`,`tno`,`tname`,`user_id`,`noseats`,`source`,`des`,`fair`,`email`)
VALUES (NULL,'$r','$tname','$u_id','$t','$source','$des','$fair','$w')";
    mysql_query($query3);
  echo"<b><center><h1><i>CONGRATULATIONS YOUR TICKET HAS BEEN BOOKED</i></h1></center></b>"; 
    echo"<br>";
    $newq="SELECT * FROM booking order BY pnr DESC LIMIT 1";
        $o=mysql_query($newq);
        $p=mysql_fetch_assoc($o);
        $pnr=$p['pnr'];
    echo" <style>
    body
        {background-image: url(g.jpg);
            background-repeat: no-repeat;
            background-size:cover;
   
            
        
        }
        <body>
    </body> 
    </style>";
    echo"<br>";
    echo "<center><table border='4'>
        <tr>
        
            <td><b><font size='5'>Pnr</b></td>
            <td><font size='5'>$pnr</td>
        </tr>
        <tr>
            <td><b><font size='5'>Train No</b></td>
            <td><font size='5'>$r</td>
        </tr>
        <tr>
            <td><b><font size='5'>Train Name</b></td>
            <td><font size='5'>$tname</td>
        </tr>
     <tr>
            <td><b><font size='5'>User Id</b></td>
            <td><font size='5'>$u_id</td>
        </tr>
     <tr>
            <td><b><font size='5'>Seats</b></td>
            <td><font size='5'>$t</td>
        </tr>
        <tr>
            <td><b><font size='5'>Source</b></td>
            <td><font size='5'>$source</td>
        </tr>
        <tr>
            <td><b><font size='5'>Destination</b></td>
            <td><font size='5'>$des</td>
        </tr>
        <tr>
            <td><b><font size='5'>Fair</b></td>
            <td><font size='5'>$fair</td>
        </tr>
        <tr>
            <td><b><font size='5'>Email</b></td>
            <td><font size='5'>$w</td>
        </tr>
        </table></center>";
    echo"<br>";
    
    echo"<center><a href='log.php'><font size='5'><b>HOME</b></a></center>";
    
}
?>