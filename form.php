<html>
    <style>
    body
        {background-image: url(m2.jpg);
            background-repeat: no-repeat;
            background-size:cover;
   
            
        
        }
        <body>
    </body> 
    </style>
 <script>
            function valid(){
                var pass1 = document.getElementById("pass1");
                var pass2 = document.getElementById("pass2");
                if(pass1.value==pass2.value)
                    return true;
                else{
                    alert("Password Doesn't MATCH....!!!");
                return false;
            }
            }
        </script>
<font size="4">
<form method="POST" action="connect.php" onsubmit="return valid()" >
<center><h1>REGISTRATION PAGE</h1><center>
<b>Enter the name</b> :
<input type="text" name="a" size="30" required><br><br>
<b>Enter the user id</b> :
<input type="text" name="b" size="30" required><br><br>
<b>Enter the email</b> :
<input type="email" name="c" size="30" required><br><br>
<b>Enter the address</b> :
<input type="text" name="d" size="30" required><br><br>
<b>Enter the pincode</b> :
<input type="number" name="e" size="30" required><br><br>
<b>Enter the state</b> :
<input type="text" name="f" size="30" required><br><br>
<b>Enter the city</b> :
<input type="text" name="g" size="30" required><br><br>
<b>Enter the phone no</b> :
<input type="number" name="h" size="30" required><br><br>
<b>Enter the password</b> :
<input type="password" name="i" size="30" required id="pass1"><br><br>
<b>Confirm password</b> :
<input type="password" name="j" size="30" required id ="pass2"><br><br>
<b>Enter the gender</b> :
<input type="text" name="k" size="30" required><br>
<br>
<input type="submit"  value="SUBMIT">
<input type="reset"  value="RESET">
</form>
</html>