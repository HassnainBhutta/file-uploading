<?php





$name  = $_FILES["picture"]["name"];
   $tmp_path  = $_FILES["picture"]["tmp_name"];
   $size      = $_FILES["picture"]["size"];
   $limit_size = 3 * 1024 * 1024; 








$allowed = ['jpg', 'jpeg', 'png'];
$exts =  pathinfo($name, PATHINFO_EXTENSION  );






// allowed

if( in_array( $exts, $allowed) == false ) {
    die("selected file type is not allowed");
} 




// size-limit

if($size > $limit_size) {
    exit("File size should be less than 2mb");
}



// new-name


$new_folder = "pictures/" . uniqid() . ".$exts";






move_uploaded_file($tmp_path, $new_folder);

?>




