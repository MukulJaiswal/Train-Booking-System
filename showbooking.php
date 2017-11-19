<?php

session_start();
if(isset($_SESSION['user_id']))
{
    
    $userid=$_SESSION['user_id'];
}
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$query="SELECT * FROM booking WHERE user_id='$userid'";
$res=mysql_query($query);
echo"<center>";
echo" <style>
    body
        {background-image: url(bookingdetails.jpg);
            background-repeat: no-repeat;
            background-size:cover;
   
            
        
        }
        <body>
    </body> 
    </style>";
echo"<h1><b>YOUR BOOKING DETAILS</b></h1>";
 echo "<table border='5'>";
 echo "<tr><th>Pnr</th><th>Train No.</th><th>Train Name</th><th>User_id</th><th>Seats</th><th>Source</th><th>Destination</th><th>Fair</th><th>Email</th></tr>";
while($row=mysql_fetch_array($res))
 {

 echo "<tr>";    
 echo "<td>".$row[0]."</td>";
 echo "<td>".$row[1]."</td>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td>".$row[7]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td><b><a href='cancel.php'>CANCEL</a></b></td>";
 echo "</tr>";
 }
  echo "</table>";
 echo"</center>";
     echo"<br>";
     echo"<center><a href='log.php'><b><font size ='8'>HOME</b></a></center>";













?>