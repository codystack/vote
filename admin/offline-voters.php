<?php
require('./components/header.php');
require_once './components/navbar.php';
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
                        <h2 class="mb-0">All Approved Transfers</h2>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Bank Name</th>
                            <th scope="col">Account Name</th>
                            <th scope="col">Account Number</th>
                            <th scope="col">Paid Amount</th>
                            <th scope="col">Contestants</th>
                            <th scope="col">Payment Proof:</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment date</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $sql = "SELECT * FROM bankdetails WHERE status = 1 order by paymentdate DESC";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                $status = "Approved";

                                echo "<tr>";
                                echo "<td>".$row['bank']."</td>";
                                echo "<td>".$row['accountname']."</td>";
                                echo "<td>".$row['accountnumber']."</td>";
                                echo "<td>".$row['amount']."</td>";
                                echo "<td>".$row['contestantCode']."</td>";
                                echo "
                                    <th scope='row'>
                                        <div class='media align-items-center'>
                                            <a onclick=\"proof('../voter_uploads/".$row['proofimage']."')\" class='avatar img-thumbnail mr-3'>
                                                <img alt='proof' src='../voter_uploads/".$row['proofimage']."'>
                                            </a>
                                        </div>
                                    </th>
                                    ";
                                echo "<td>".$status."</td>";
                                echo "<td>".date('F/j/Y',strtotime($row['paymentdate']))."</td>";
                                echo "</tr>";
                            }
                        }else {
                            echo "<td><p>Check your database</p></td>";
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
