
<?php 
 session_start();ob_start();
 include ("myclass.php");

$target_dir = "upload/";
@$file_name =  basename($_FILES["fileToUpload"]["name"]);
@$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $report  =  "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $report = "File is not an image.";$count = 1;
        $uploadOk = 0;
    }

    // Check if file already exists
if (file_exists($target_file)) {
    $report = "Sorry, file already exists."; $count=1;
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    $report = "Sorry, your file is too large.";$count=1;
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $report = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";$count=1;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $report = "Sorry, your file was not uploaded.";$count=1;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {    
        
    $sql = $db->query("UPDATE user SET picture = '$file_name' WHERE id = '$id' ") or die($db->error);

    if($sql){
        $report = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }else{
        die($db->error);
        unlink('upload/'.$file_name);
    }
    } else {
        $report = "Sorry, there was an error uploading your file.";$count=1;
    }
}
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;

    }
    .card{
        width: 400px;
    }
 </style>
</head>
<body>
 <form action="" method="POST">
  <div class="container">
   <div class="card">
    <div class="card-header">
     <h4>Log In</h4>
    </div>
    
<div class="card-body">
     <label >Email</label>
     <div class="form-group">
      <input type="email" class="form-control" name="email" id="email">
     </div>
    </div>
    
    
     <div class="form-group">
      <input type="file" class="custom-file-input mt-4" id="exampleInputFile">
     
    <div class="class-footer">
     <button class="btn btn-primary" type="button" style="margin-left:150px;" name="login">Choose File</button>
    </div>
</div>
    </div>
   </div>
  </div>
 </form>

 


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="jquery.min.js"></script>

 <script>
  function LogIn(){
  
   var email= document.getElementById('email').value;
   
   var pass= document.getElementById('password').value;
   
   $.ajax({
    type:'get',
    url:'myclass.php?email='+email+'&password='+pass+
    '&type=login'
   }).done(function(data){
    alert(data);
   });

  }
 </script>
</body>
</html>