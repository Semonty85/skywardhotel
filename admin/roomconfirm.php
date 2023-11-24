<?php

include '../config.php';

$id = $_GET['id'];

$sql ="Select * from roombook where id = '$id'";
$re = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($re))
{
	$Name = $row['Name'];
    $Email = $row['Email'];
    $Country = $row['Country'];
    $Phone = $row['Phone'];
    $RoomType = $row['RoomType'];
    $NoofRoom = $row['NoofRoom'];
    $Meal = $row['Meal'];
    $cin = $row['cin'];
    $cout = $row['cout'];
    $noofday = $row['nodays'];
    $stat = $row['stat'];
}


if($stat == "NotConfirm")
{
    $st = "Confirm";

    $sql = "UPDATE roombook SET stat = '$st' WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){


        $sql_room_id = "SELECT * FROM room WHERE 'type' = '$RoomType'";
        $result_room_id = mysqli_query($conn,$sql_room_id);
        
        $ttot = $noofday * $NoofRoom;

        $psql = "INSERT INTO payment(room_id,room_booking_id,total_amount) VALUES ('$id', '$result_room_id', '$ttot')";

        mysqli_query($conn,$psql);

        header("Location:roombook.php");
    }
}

?>