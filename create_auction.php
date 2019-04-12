


<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
     if(dd<10){
            dd='0'+dd
        } 
        if(mm<10){
            mm='0'+mm
        } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("datefield").setAttribute("max", today);
</script>

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Register|E-Auction</title>
<?php include 'assets/acc_header.php';?>
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
            <!-- === BEGIN CONTENT === -->
            <div id="content">
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Register Box -->
                        <div class="col-md-6 col-md-offset-3 col-sm-offset-3">

                         <script>
                            var today = new Date();
                            var dd = today.getDate();
                            var mm = today.getMonth()+1; //January is 0!
                            var yyyy = today.getFullYear();
                             if(dd<10){
                                    dd='0'+dd
                                } 
                                if(mm<10){
                                    mm='0'+mm
                                } 

                            today = yyyy+'-'+mm+'-'+dd+1;
                            document.getElementById("datefield").setAttribute("max", today);
                        </script>
                    
                   <form class="signup-page" method="POST" enctype="multipart/form-data">
                                <div class="signup-header">
                                    <h2>Create a new auction</h2>
                                    
                                </div>

                                <label>Name of the item
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="text" name="name" id="name" pattern="[A-Za-z0-9]{3,}" title="Three or more letter" required>
                                <label>Description</label>
                                <input class="form-control margin-bottom-20" type="text" name="description" id="description" max="20">
                                 <label>Type</label>
                                <select class="form-control margin-bottom-20" name="type" id="type">
                                  <option value="mobile" for="type">Mobile phones</option>
                                  <option value="vehicle" for="type">Vehicles</option>
                                  <option value="jewellery" for="type">Jewellery</option>
                                  <option value="furniture" for="type">Furniture</option>
                                  <option value="vehicle" for="type">Vehicles</option>
                                  <option value="camera" for="type">Camera</option>
                                  <option value="computer" for="type">Computer</option>
                                  <option value="vehicle" for="type">Vehicles</option>
                                  <option value="iron box" for="type">Iron box</option>
                                  <option value="clothes" for="type">Clothes</option>
                                  <option value="shoes" for="type">Shoes</option>
                                  <option value="building" for="type">Building</option>
     
                                </select>
                                <label>Start Value
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="number" name="start_value" id="start_value" min="0.01" step="0.01"  required>

                                <label>Closing Date
                                    <span class="color-red">*</span>
                                </label>
                                <input class="form-control margin-bottom-20" type="date" name="closing_date" id="closing_date" min=<?php
                                echo date('Y-m-d'); ?> required>
                                <label>Upload a photo
                                <input name="image" type="file" id="image" accept=".jpg,.jpeg,.png" required onchange="validateFileType(this)"/>
                                <img id="blah" src="#" alt="your image" />
                                <hr>
                                <div class="row">
                                    <div class="col-lg-8">
                                        
                                    </div>
                                    <div class="col-lg-4 text-right">
                                        <button class="btn btn-primary" type="submit" name="create_auction" id="create_auction" value="create_auction" >Create Auction</button>
                                    </div>
                                </div>

                            </form>

                            


<script type="text/javascript">
    function validateFileType(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
        var fileName = document.getElementById("fileName").value;
        var idxDot = fileName.lastIndexOf(".") + 1;
        var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
        if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){

            //TO DO
        }else{
            alert("Only jpg/jpeg and png files are allowed!");
        }   
    }
</script>
                        </div>
                        <!-- End Register Box -->
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
         <?php include 'assets/footer.php';?>
