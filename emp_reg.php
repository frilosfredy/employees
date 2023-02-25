<html>
    <body>
    <a href="Login.php">Login</a>
    <h2> Employee Registration</h2>
    
    <form method="get" action="">
        Enployee Name : <br>
        <input type="text" name="a" required>
        <br>
        Email:<br>
        <input type="email" name="b" required>
        <br>
        Address : <br>
        <input type="text" name="c" required>
        <br>
        Phone Number : <br>
        <input type="text" name="d" required>
        <br>
        Password : <br>
        <input type="password" name="e" required>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if(!empty($_GET)){
            include("db.php");
            $ename=$_GET['a'];
            $email=$_GET['b'];
            $address=$_GET['c'];
            $phoneno=$_GET['d'];
            $pass=$_GET['e'];

            
            $query="insert into employee(name,address,phoneno) values('".$ename."','".$email."','".$address."','".$phoneno."','".$pass."')";
            $sql=mysqli_query($con,$query);
            if($sql){
                echo "Successfully Registered";
            }
        }
    ?>



    </body>
</html>
