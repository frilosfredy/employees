<a href="empregister.php">Registration</a>  &nbsp; &nbsp; <a href="Login.php">Login</a>
<h2>Profile</h2>
<?php
        
        if(!empty($_GET)){
            include("empdb.php");
            

            
            $query="delete from employee where id='".$_GET['empid']."'";
            $sql=mysqli_query($con,$query);
            if($sql)
            {
                
                echo "Deleted Successfully";
                header("Location:empregister.php");
            }
            

            
        }
        else
        {
            header("Location:empregister.php");
        }
    ?> 
