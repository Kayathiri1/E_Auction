<?php
    $user=$_SESSION['email'];
    $db = mysqli_connect('localhost', 'root', '', 'auction');

    $que= "SELECT account_id FROM ganache_mapping where email='$user'";
    $result=mysqli_query($db, $que);
    $applicationArray=array();
        while($row=mysqli_fetch_assoc($result)){
            $applicationArray[]=$row;
        }
        foreach ($applicationArray as $application) {
            $id=$application['account_id'];
    
        }

    $query="SELECT * from transaction WHERE from_id='$user' order by time desc";
    $result=mysqli_query($db,$query);
    echo "<ul>";
    if(mysqli_num_rows($result)==0){
        $query1="SELECT * from transaction WHERE to_id='$user' order by time desc";
        $result1=mysqli_query($db,$query1);
        echo "<ul>";
        if(mysqli_num_rows($result1)==0){
            echo "You haven't done any transaction";
        }else{
            while($row=mysqli_fetch_array($result1)){
                $from_id=$row['from_id'];
                $amount=$row['amount'];
                $time=$row['time'];
                echo "<li>You have received ",$amount," ether from ",$from_id," at ",$time,"</li>";
            }      
        }
    }else{
        while($row=mysqli_fetch_array($result)){
            $to_id=$row['to_id'];
            $amount=$row['amount'];
            $time=$row['time'];
            echo "<li>You have send ",$amount," ether to ",$to_id," at ",$time,"</li>";
        }      
    }
    echo "</ul>";

?>