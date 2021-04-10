<html>
<body center>
<?php
 if(isset($_POST['submit'])){
    $name=$_POST['n1'];
    $email=$_POST['e1'];
    $balance=$_POST['b1'];
    $con = mysqli_connect("localhost","root","","bank") ;
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($con,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
}

?>
</body>
</html>