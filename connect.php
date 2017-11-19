 <?php
 $q=$_POST['a'];
 $w=$_POST['b'];
 $e=$_POST['c'];
 $r=$_POST['d'];
 $t=$_POST['e'];
 $y=$_POST['f'];
 $u=$_POST['g'];
 $x=$_POST['h'];
 $o=$_POST['i'];
 $p=$_POST['j'];
 $z=$_POST['k'];
 
 
 mysql_connect("localhost","root","");
 mysql_select_db("irctc");
 
 $query="SELECT * from reg_user WHERE user_id='$w'";
 $result=mysql_query($query);
 $count=mysql_fetch_array($result);
 if($count==0)
 {
 $query1="INSERT INTO reg_user(name,user_id,email,address,pincode,state,city,phone,password,gender) VALUES ('$q','$w','$e','$r','$t','$y','$u','$x','$o','$z')";
 mysql_query($query1);
 echo"<b><center><h1>Congratulations You Are Successfully Registered</h1></center></b>";
     echo" <style>
    body
        {background-image: url(m3.jpg);
            background-repeat: no-repeat;
            background-size:cover;
   
            
        
        }
        <body>
    </body> 
    </style>";
 echo"<br><br>";
 echo "<center><font size='7'><table border='2' style='font-size:20'>
        <tr>
            <td><b>NAME</b></td>
            <td>$q</td>
        </tr>
        <tr>
            <td><b>USER ID</b></td>
            <td>$w</td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td>$e</td>
        </tr>
     <tr>
            <td><b>Address</b></td>
            <td>$r</td>
        </tr>
     <tr>
            <td><b>Pincode</b></td>
            <td>$t</td>
        </tr>
        <tr>
            <td><b>State</b></td>
            <td>$y</td>
        </tr>
        <tr>
            <td><b>City</b></td>
            <td>$u</td>
        </tr>
        <tr>
            <td><b>Phone</b></td>
            <td>$x</td>
        </tr>
        <tr>
            <td><b>Gender</b></td>
            <td>$z</td>
        </tr>
        </table></center>";
     echo"<br>";
     echo"<center><a href='index.php'><b>LOGIN</b></a></center>";
     
 }
 else
 echo"<b><center>User ID already exists Please enter other ID</center></b>";
 
 ?>
 
  