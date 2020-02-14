<?php
// AUTH CONTROLLER FOR BACKEND
session_start();
// last request was more than 30 minutes ago
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    $id = $_SESSION['id'];
    $time = time();
    $updateQuery = mysqli_query($conn,"UPDATE `admin` SET `lastAction` = '$time' WHERE `lastAction` = NOW() - 1800");
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
    header("Location: ?login=0&time=inactive");
    exit();
}$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp


// initializing variables
$errors =  array();
$username= "";

// CODE IF CLICKED ON LOGIN
if (isset($_POST['admin_login_btn'])) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    if (empty($username)) {
        $errors['empty_username'] = "Enter your admin username";
        header("Location: ?login=0&username_error=".$errors['empty_username']."&username=".$username);
    }else if (empty($password)) {
        $errors['empty_password'] = "Enter the correct admin password";
        header("Location: ?login=0&password_error=".$errors['empty_password']."&username=".$username);
    }
    if (count($errors) == 0) {
        $sql = "SELECT * FROM superadmin WHERE username = ? ";
        if($query = $conn->prepare($sql)) { // assuming $mysqli is the connection
            $query->bind_param('s', $username);
            $query->execute();
            // any additional code you need would go here.
            $result = $query->get_result();
            $user = $result->fetch_assoc();
            $query->close();
            if ($password === $user['password'] || password_verify($_POST['password'], $user['password'])) {
                $id = $user['id'];
                if ($user[`lastAction`] == 0) {
                    $updateQuery = mysqli_query($conn, "UPDATE `superadmin` SET lastAction = NOW() WHERE `id` = '$id'");
                } else {
                    $updateQuery = mysqli_query($conn, "UPDATE `superadmin` SET lastAction = NOW() WHERE `id` = '$id'");
                }
                $_SESSION['admin_session'] = TRUE;
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $user['email'];
                //SESSION VARIABLE WITH NULL VALUE
                // flash messages
                $_SESSION['successlogin'] = "you're logged in.";
                $_SESSION['loginlog'] = "you logged in at " . date("h:i a");
                header('location: ?login=true');
            } else {
                $errors['no_account'] = "You do not have access to this portal!";
                header("Location: ?login=0&no_account=" . $errors['no_account'] . "&username=" . $username);
            }
        } else {
            $error = $conn->errno . ' ' . $conn->error;
            echo $error; // 1054 Unknown column 'username' in 'field list'
        }
    }
}
//UPLOAD CONTESTANTS IMAGES
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST['add_contestant_btn'])){
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $_image = $_FILES["fileToUpload"]["name"];
    $pseudoCode = RandomString(4);
    $score = 0;
    $status = 1;

    if (empty($fname)) {
        $errors['firstname_error'] = "First Name name is required!";
        header("Location: ?add=true&firstname_error=".$errors['firstname_error']."&firstname=".$fname."&lastname=".$lname);
    }if (empty($lname)) {
        $errors['lastname_error'] = "First Name location is required!";
        header("Location: ?add=true&lastname_error=".$errors['lastname_error']."&firstname=".$fname."&lastname=".$lname);
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
//        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // if everything is ok, try to upload file
    if ($uploadOk == 1) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    } else {
        $errors['image_error'] = "Sorry, there was an error uploading the contestant image. only JPEG, JPG, PNG is allowed";
        header("Location: ?add=true&image_error=".$errors['image_error']."&firstname=".$fname."&lastname=".$lname);
        exit();
    }
    if (count($errors) == 0) {
        $query = mysqli_query($conn,  "INSERT INTO contestants (pseudocode, image, firstname, lastname, scores, status, added_date) VALUES('$pseudoCode', '" . $_FILES["fileToUpload"]["name"] . "', '$fname', '$lname', '$score', '$status', NOW())");
        if ($query){
            header("Location: ?success=added");
            exit();
        } else{
            header("Location: ?error=couldnotCreate");
            exit();
        }
    }
}
//DELETE CONTESTANTS
if (isset($_GET['deleteid'])){
    $del_selected = mysqli_query($conn, "DELETE FROM contestants WHERE id = '".$_GET['deleteid']."'");
    mysqli_query($conn,"ALTER TABLE contestants AUTO_INCREMENT = 1");
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=contestants\">";
    exit();
}
//EDITING CONTESTANTS
function createeditid(){
    $_SESSION['editid'] = $_GET['editid'];
}

if (isset($_POST['edit_contestant_btn'])){
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $_image = $_FILES["fileToUpload"]["name"];
    $pseudoCode =  mysqli_real_escape_string($conn, $_POST['pseudocode']);
    $edit_id = $_SESSION['editid'];

    if (empty($fname)) {
        $errors['firstname_error'] = "First Name name is required!";
        header("Location: ?editid=true&firstname_error=".$errors['firstname_error']."&firstname=".$fname."&lastname=".$lname);
        unset($_SESSION['editid']);
        exit();
    }
    if (empty($lname)) {
        $errors['lastname_error'] = "First Name location is required!";
        header("Location: ?editid=true&lastname_error=".$errors['lastname_error']."&firstname=".$fname."&lastname=".$lname);
        unset($_SESSION['editid']);
        exit();
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
//        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // if everything is ok, try to upload file
    if ($uploadOk == 1) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    }
    if (count($errors) == 0) {
        editContestant($conn, $pseudoCode, $fname, $lname, $edit_id);
    }
}

//Edit Courses
function editContestant($conn, $pseudoCode, $fname, $lname, $edit_id)
{
    $updateQuery = "UPDATE contestants SET pseudocode = '$pseudoCode', firstname = '$fname', lastname = '$lname' WHERE id = '$edit_id'";
    $result = mysqli_query($conn, $updateQuery);
    if ($result){
        header("Location: ?success=updated");
        unset($_SESSION['editid']);
        exit();
    } else{
        header("Location: ?error=couldnotCreate");
        unset($_SESSION['editid']);
        exit();
    }
}
//LOGOUT ADMIN
if (isset($_GET['logout'])) {
    $id = $_SESSION['id'];
    $time = time();
    $updateQuery = mysqli_query($conn,"UPDATE `superadmin` SET lastAction = '$time' WHERE `id` = '$id'");
    session_destroy();
    $_SESSION['admin_session'] = FALSE;
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    // UNSET SESSION VAIRABLE WITH NULL
    header('location: admin?signout=0');
    exit();
}

function RandomString($length) {
    $keys = array_merge(range(0,9), range('a', 'z'));

    $key = "";
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}