<?php
require ('./components/header.php');
require_once'./components/navbar.php'; 
?>
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
    </div>
</div>
<div class="container-fluid mt--7">

    <div class="row">
        <div class="col paymentgateway1">
            <div style="text-align: center;"><img class="paymentgateway" src="https://i.imgur.com/yyDfFdU.png" style="width: 150px;"></div>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="container">
                                <?php
                            $sql = "SELECT * FROM bankdetails WHERE status = 0 order by paymentdate DESC";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($row['status'] > 0) {
                                        $status = "<span class='text-success'>Approved</span>";
                                    } else {
                                        $status = "<span class='text-danger'>Pending</span>";
                                    }
                                    echo "<div class=\"card mb-lg-5\">";
                                    echo "<div class=\"card-header\">Payment date: <strong>".date('F/j/Y',strtotime($row['paymentdate']))."</strong>";
                                    echo "<span class=\"float-right\"> <strong>Status:</strong> ".$status."</span>";
                                    echo "</div>";
                                    echo "<div class=\"card-body\">";
                                    echo "<div class=\"row d-flex justify-content-between mb-2\">";
                                    echo "<div class=\"p-3\">";
                                    echo "<h6 class=\"mb-3\">For:</h6>";
                                    echo "<div><strong>".strtoupper($row["contestantCode"])."</strong></div>";
                                    echo "</div>";
                                    echo "<div class=\"p-3\">";
                                    echo "<h6 class=\"mb-3\">Payment Proof: </h6>";
                                    echo "<a onclick=\"proof('../voter_uploads/".$row['proofimage']."')\" class=\"btn btn-icon btn-3 btn-info verifypayment\" type=\"button\">
                                                <span class=\"btn-inner--text\">View Payment Proof</span>
                                            </a>";
                                    echo "</div>";

                                    echo "</div>";
                                    echo "<div class=\"table-responsive-sm\">";
                                    echo "<table class=\"table table-striped\">";
                                    echo "<thead>";
                                    echo "<tr>";
                                    echo "<th>Bank Name</th>";
                                    echo "<th>Account Name</th>";
                                    echo "<th class=\"right\">Account Number</th>";
                                    echo "<th class=\"center\">Amount</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    echo "<tr>";
                                    echo "<td class=\"left strong\">".$row["bank"]."</td>";
                                    echo "<td class=\"left\">".$row["accountname"]."</td>";
                                    echo "<td class=\"right\">".$row["accountnumber"]."</td>";
                                    echo "<td class=\"center\">".$row["amount"]."</td>";
                                    echo "</tr>";
                                    echo "</tbody>";
                                    echo "</table>";
                                    echo "</div>";
                                    echo "<hr>";
                                    echo "<div class=\"row\">";
                                    echo "<div class=\"col-lg-4 col-sm-5\">";
                                    if ($status !== "<span class='text-success'>Approved</span>"){
                                        echo "
                                            <button onclick=\"location.assign('?transferid=".$row['id']."&pseudoCode=".$row['contestantCode']."')\" class=\"btn btn-icon btn-3 btn-success mb-3\" type=\"button\">
                                                <span class=\"btn-inner--icon\"><i class=\"ni ni-check-bold\"></i></span>
                                                <span class=\"btn-inner--text\">Approve</span>
                                            </button>
                                        ";
                                        echo "
                                        <button onclick=\"location.assign('?transferdelid=".$row['id']."')\" class=\"btn btn-icon btn-3 btn-danger mb-3\" type=\"button\">
                                            <span class=\"btn-inner--icon\"><i class=\"ni ni-fat-remove\"></i></span>
                                            <span class=\"btn-inner--text\">Delete</span>
                                        </button>
                                    ";
                                    }
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--EDIT CONTESTANT Modal -->
    <div class="modal fade" id="approveTraferModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="text-align: center;"><?php echo $Msg; ?></p>
                    <div class="container">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                            <div class="row">
                                <h3>Confirm Transition Amount</h3>
                                    <input type="text" class="form-control mb-3" placeholder="Enter Approved Amount" name="amount">
                                    <input type="hidden" name="depositorid" value="<?php echo $_GET['transferid']?>">
                                    <input type="hidden" name="contestant" value="<?php echo $_GET['pseudoCode']?>">
                                    <input class="btn btn-default" type="submit" name="updateBankTranferBtn" value="Save Changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('./components/footer.php'); ?>
