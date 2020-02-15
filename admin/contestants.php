<?php
require('./components/header.php');
require_once './components/navbar.php';

$Msg = "Image dimension should be 1000px x 1000px
and size should not be higher than 1MB";

if (isset($_GET['firstname_error']) && $_GET['firstname_error'] === 'First Name name is required!'){
    $invalid_fname = "is-invalid";
    $invalid_fname_Msg = "<div class=\"invalid-feedback\">".$_GET['firstname_error']."</div>";
}
if (isset($_GET['lastname_error']) && $_GET['lastname_error'] === 'Last Name name is required!'){
    $invalid_lname = "is-invalid";
    $invalid_lname_Msg = "<div class=\"invalid-feedback\">".$_GET['lastname_error']."</div>";
}
if (isset($_GET['pseudocode_error']) && $_GET['pseudocode_error'] === 'Pseudo Code must not be empty!'){
    $invalid_lname = "is-invalid";
    $invalid_lname_Msg = "<div class=\"invalid-feedback\">".$_GET['pseudocode_error']."</div>";
}
if (isset($_GET['image_error']) && $_GET['image_error'] === 'Sorry, there was an error uploading the contestant image. only JPEG, JPG, PNG is allowed'){
    $Msg = "<div class=\"invalid-feedback d-block\">".$_GET['image_error']."</div>";
}

if (isset($_GET['editid'])){
    $edit_id = $_GET['editid'];

    $selectQuery = mysqli_query($conn, "SELECT * FROM contestants WHERE id = '$edit_id'");
    $result = mysqli_fetch_assoc($selectQuery);
    $pseudoCode = $result['pseudocode'];
    $fname = $result['firstname'];
    $lname = $result['lastname'];
    $image = $result['image'];
}
?>

<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
    </div>
</div>
<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 ">
                    <div class="col px-0 pb-3">
                        <h2 class="mb-0">List of Contestants</h2>
                    </div>
                    <div class="col p-0 d-flex justify-content-between align-content-center">
                        <div class="pseudotrigger">
                            <h4>Turn on/off pseudo code</h4>
                            <label class="custom-toggle">
                                <input type="checkbox">
                                <span class="custom-toggle-slider rounded-circle"></span>
                            </label>
                        </div>
                        <button onclick="location.assign('?add=true')" class="btn btn-icon btn-3 btn-info" type="button">
                            <span class="btn-inner--text">Add contestant</span>
                        </button>
                    </div>


                    <!--ADD CONTESTANT Modal -->
                    <div class="modal fade" id="addContestantsModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div style="text-align: center;"><h3><?php echo $Msg; ?></div>
                                    <div class="row">
                                        <div class="col addcontestants">
                                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control <?php echo $invalid_fname; ?>" id="firstName"
                                                                   placeholder="First Name" name="firstname">
                                                        </div>
                                                        <?php echo $invalid_fname_Msg; ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control <?php echo $invalid_lname; ?>" id="lastName"
                                                                   placeholder="Last Name" name="lastname">
                                                        </div>
                                                        <?php echo $invalid_lname_Msg; ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="file" name="fileToUpload" id="fileToUploadAdd">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-info" name="add_contestant_btn">Add Contestant
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--EDIT CONTESTANT Modal -->
                    <div class="modal fade" id="editContestantsModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class='media align-items-center mb-3 text-center d-block'>
                                        <img alt='Image placeholder' src='./uploads/<?php echo $image;?>' height="200" width="200" class="img-thumbnail rounded-circle">
                                    </div>

                                    <p style="text-align: center;"><?php echo $Msg; ?></p>
                                    <div class="row">
                                        <div class="col addcontestants">
                                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control <?php echo $invalid_fname; ?>" id="firstName"
                                                                   placeholder="First Name" name="firstname" value="<?php echo $fname;?>">
                                                        </div>
                                                        <?php echo $invalid_fname_Msg; ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control <?php echo $invalid_lname; ?>" id="lastName"
                                                                   placeholder="Last Name" name="lastname" value="<?php echo $lname;?>">
                                                        </div>
                                                        <?php echo $invalid_lname_Msg; ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control <?php echo $invalid_pseudocode; ?>" id="pseudocode"
                                                                   placeholder="Psuodo Code" name="pseudocode" value="<?php echo $pseudoCode;?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="file" name="fileToUpload" id="fileToUploadAdd">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success" name="edit_contestant_btn">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Contestants</th>
                            <th scope="col">No. of vote</th>
                            <th scope="col">Status</th>
                            <th scope="col">Pseudo code</th>
                            <th class="text-right" scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM contestants order by scores DESC";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    if ($row['status'] > 0){
                                        $status = "<span class='badge badge-dot'><i class='bg-success'></i> Approved</span>";
                                    } else {
                                        $status = "<span class='badge badge-dot'><i class='bg-success'></i> Deleted</span>";
                                    }
                                    echo "
                                    <tr>
                                    <th scope='row'>
                                        <div class='media align-items-center'>
                                            <a href='#' class='avatar rounded-circle mr-3'><img alt='Image placeholder' src='./uploads/".$row['image']."'></a>
                                            <div class='media-body'><span class='mb-0 text-sm'>".$row['firstname']." ".$row['lastname']."</span></div>
                                        </div>
                                    </th>
                                    ";
                                    echo "<td>".$row['scores']."</td>";
                                    echo "<td>".$status."</td>";
                                    echo "<td>".strtoupper($row['pseudocode'])."</td>";
                                    echo "<td align=\"right\">";
                                    echo "
                                        <button onclick=\"location.assign('?editid=".$row['id']."')\" class='btn btn-icon btn-3 btn-info' type='button'>
                                            <span class='btn-inner--icon'><i class='ni ni-ruler-pencil'></i></span>
                                            <span class='btn-inner--text'>Edit</span>
                                        </button>
                                    ";
                                    echo "
                                        <button onclick=\"location.assign('?deleteid=".$row['id']."')\" class='btn btn-icon btn-3 btn-danger' type='button'>
                                            <span class='btn-inner--icon'><i class='ni ni-archive-2'></i></span>
                                            <span class='btn-inner--text'>Trash</span>
                                        </button>
                                    ";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            }else {
                                echo "<td><p>You have 0 Contestant!</p></td>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require('./components/footer.php'); ?>
    <!-- End Footer -->
