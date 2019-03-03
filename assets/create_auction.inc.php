
<?php 
$owner=$_SESSION['email'];
$name="";
$description="";
$type="";
$start_value="";
$closing_date="";
$image_path="";
$image_name="";
$file="";
   


$db = mysqli_connect('localhost', 'root', '', 'auction');
if (isset($_POST['create_auction'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $start_value = mysqli_real_escape_string($db, $_POST['start_value']);
    $closing_date = mysqli_real_escape_string($db, $_POST['closing_date']);
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     

    

     
            $query="INSERT INTO auction (name, description,  type, start_value ,closing_date,owner,image) VALUES('$name','$description', '$type' ,'$start_value', '$closing_date','$owner','$file')";
            if(mysqli_query($db,$query)){
    echo '<script>alert("inserted")</script>';
     
}

           
       
   
    
}



?>        