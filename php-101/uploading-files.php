<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function upload_file() {
  // Setup
  $tmp_name = $_FILES['file']['tmp_name'];
  $target_dir = 'uploads/';
  $target_file = $target_dir . basename($_FILES['file']['name']);
  $max_file_size = 5000000; // 5MB
  $allowed_file_types = array('application/pdf; charset-binary');
  $allowed_image_types = array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG);
  
  //Check if image type is allowed 
  $image_check = getimagesize($tmp_name);
  
  if (!in_array($image_check[2], $allowed_image_types)){
    // If not an allowed image type, check if it is allowed file type
    exec('file -bi . $tmp_name, $file_check.');
    
    if(!in_array($file_check[0], $allowed_file_types)) {
      return 'This File Type is not allowed..';
    }
  }
  
  if(file_exists($target_file)){
    return 'Sorry that file already exists.';
  }
  
  if (filesize($tmp_name) > $max_file_size) {
    return 'Sorry this file is too large.';
  }
  
  // Store the file
  if (move_uploaded_file($tmp_name, $target_file)) {
    chmod($target_file, 0644);
    return 'Your file has been uploaded.';
  } else {
    return 'There was a problem storing your file. Try again?';
  }
  
}

if (!empty($_FILES)){
  echo upload_file();
}

?>

<form action="" method="POST" enctype="multipart/form-data">
  Select Image to Upload:
  <input type="file" name="file">
  <input type="submit" value="upload">
</form>