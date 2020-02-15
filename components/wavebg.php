<div class="header pt-5">
    <img src="https://i.imgur.com/XSGaWUp.png" width="280px">
    <!--Content before waves-->
    <?php
    $headerMsg = "Vote for your Favourite <br> Contestant";
    ?>
    <div class="inner-header flex mt-2">
        <div class="h3 text-white font-weight-light"><?php echo $headerMsg;?></div>
    </div>
    <?php
    if (isset($_GET['q'])){
        $pseudoCode = $_GET['q'];

        $selectQuery = "SELECT * FROM contestants WHERE pseudocode = '$pseudoCode'";
        $result = mysqli_query($conn, $selectQuery);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
//            initialize variables
            $pseudo = $row['pseudocode'];
            $image = $row['image'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $scores = $row['scores'];
            require_once ('paycard.php');
        } else {
            $headerMsg = "Incorrect Contestant Pseudo Code,<br> Try Again";
            echo "<meta http-equiv=\"refresh\" content=\"4;URL=?norecord=404\">";
            echo "
            <div class='container'>
            <div class='row my-lg-5'>
                <div class='col my-lg-5'>
                    <h2>". $headerMsg ."</h2>
                </div>
            </div>
            </div>
            <div>
               <svg class=\"waves\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 24 150 28\" preserveAspectRatio=\"none\" shape-rendering=\"auto\">
                    <defs>
                        <path id=\"gentle-wave\" d=\"M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z\" />
                    </defs>
                    <g class=\"parallax\">
                        <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"0\" fill=\"rgba(255,255,255,0.7\" />
                        <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"3\" fill=\"rgba(255,255,255,0.5)\" />
                        <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"5\" fill=\"rgba(255,255,255,0.3)\" />
                        <use xlink:href=\"#gentle-wave\" x=\"48\" y=\"7\" fill=\"#fff\" />
                    </g>
                </svg>
            </div>
            ";
            exit();
        }
    } else {
        require ('./search.php');
        echo "<div class=\"container-xl\">";
        echo "<div id=\"contestantCards\" class=\"row\">";
        $sql = "SELECT * FROM contestants order by scores DESC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                include ('card.php');
            }
        }
        echo "</div>";
        echo "</div>";
    }
   ?>
    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
<!--Waves end-->
</div>
<!--Header ends-->