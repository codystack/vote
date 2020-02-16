<?php
//$fileName = $_FILES["proofimg"]["name"]; // The file name
//$fileTmpLoc = $_FILES["proofimg"]["tmp_name"]; // File in the PHP tmp folder
//$fileType = $_FILES["proofimg"]["type"]; // The type of file it is
//$fileSize = $_FILES["proofimg"]["size"]; // File size in bytes
//$fileErrorMsg = $_FILES["proofimg"]["error"]; // 0 for false... and 1 for true
//if (!$fileTmpLoc) { // if file not chosen
//    echo "ERROR: Please select a file before clicking the upload button.";
//    exit();
//}
//if(move_uploaded_file($fileTmpLoc, "voter_uploads/$fileName")){
//    echo "$fileName upload is complete";
//} else {
//    echo "move_uploaded_file function failed";
//}


/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$location = "../voter_uploads/" . $filename;
$uploadOk = 1;
$imageFileType = pathinfo($location, PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg", "jpeg", "png");
/* Check file extension */
if (!in_array(strtolower($imageFileType), $valid_extensions)) {
    $uploadOk = 0;
    echo "<p class='text-danger'>Please only Upload the following Image format (JPG, JPEG, PNG)</p>";
}

if ($uploadOk == 0) {
    echo 0;
} else {
    /* Upload file */
    if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
        echo "Image Was Uploaded Successfully!, Please Continue";
    } else {
        echo 0;
    }
}