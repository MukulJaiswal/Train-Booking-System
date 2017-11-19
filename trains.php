<?php
session_start();
if(isset($_SESSION['user_id']))
{
mysql_connect("localhost","root","");
mysql_select_db("irctc");
$query="SELECT * FROM traindetails";
$result=mysql_query($query);
echo"<b><center><h1>TRAINS DETAILS</h1></center></b>";
echo"<br>";
echo"<br>";
echo"<br>";
 echo"<center>";
echo" <style>
    body
        {background-image: url(cropped-1366-768-13214.jpg);
            background-repeat: no-repeat;
            background-size:cover;
   
            
        
        }
        <body>
    </body> 
    </style>";
 echo "<table border='5'>";
 echo "<tr><th>Train No.</th><th>Train Name</th><th>Source</th><th>Destination</th><th>Available Seats</th><th>Fair</th></tr>";
 while($row=mysql_fetch_array($result))
 {

 echo "<tr>";
 echo "<td>".$row[0]."</td>";
 echo "<td>".$row[1]."</td>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td><b><a href='booking.php'>BOOK</a></b></td>";
 echo "</tr>";

 }
  echo "</table>";
 echo"</center>";
}
else
{
    header("location:index.php");
    }

 ?>