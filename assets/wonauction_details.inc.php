<?php
session_start();
$id="";
$user="";
$owner="";
$ether="";

$db = mysqli_connect('localhost', 'root', '', 'auction');
if (isset($_POST['send'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $user = mysqli_real_escape_string($db, $_POST['user']);
    $owner = mysqli_real_escape_string($db, $_POST['owner']);
    $ether = mysqli_real_escape_string($db, $_POST['ether']);

    $query="INSERT INTO transaction (auction_id, from_id,  to_id, amount) VALUES('$id','$user', '$owner' ,'$ether')";
            if(mysqli_query($db,$query)){
    header("Location:../won_auction.php");
     
}




}


?>