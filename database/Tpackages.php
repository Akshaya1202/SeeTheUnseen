<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'Tconnect.php';
    $name=$_POST['name'];
    $city=$_POST['city'];
    $mail=$_POST['mail'];
    $mobile_number=$_POST['mobile_number'];
    $destination=$_POST['destination'];
    $no_of_people=$_POST['no_of_people'];
    $date=$_POST['date'];

    $sql="insert into `packages` (name,city,mail,mobile_number,destination,no_of_people,date)
    values('$name','$city','$mail','$mobile_number','$destination','$no_of_people','$date')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:Tenquire.php');
        }
}
?>