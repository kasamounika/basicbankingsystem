<html>
<body center>
<?php

$user=$_POST['name'];
$name1=$_POST['name1'];
$amount=$_POST['amt'];

$con = mysqli_connect("localhost","root","","transfer") ;
$sql="insert into history(sender,receiver,amount) values('{$user}','{$name1}','{$amount}')";
$result=mysqli_query($con,$sql);




if($result){
        echo "<script> alert('Hurray! Transcation successful');
                        window.location='userData.php';
                </script>";
                    
    }
 

?>
</body>
</html>