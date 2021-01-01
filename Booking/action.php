<?php

$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$phoneno=$_POST["phoneno"];
$arrive=$_POST["arrival"];
$depart=$_POST["departure"];
$guestno=$_POST["guestno"];
$type=$_POST["roomtype"];


echo $fname."<br>".$lname."<br>".$email."<br>".$phoneno."<br>".$arrive."<br>".$depart."<br>".$guestno."<br>".$type."<br>";

$servername="localhost";
$username="root";
$password="";
$dbname="booking";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("not connected".mysqli_connect_error());
}

$sql="INSERT INTO bookings(first_name,last_name,email,arrival_date,departure_date,guest_number,room_type) VALUES ('$fname','$lname','$email','$phoneno','$arrive','$depart','$guestno','$type')";

if(mysqli_query($conn,$sql)){
    echo "Data added successfully";
}
?>