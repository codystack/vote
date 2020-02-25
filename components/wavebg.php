<?php

function applyVote ($conn, $scores, $pseudo, $visitor_ip, $contestant_id) {

  $new_score = $scores + 1; //increment scores with one vote

  $incVote = mysqli_query($conn, "UPDATE `contestants` SET scores = '$new_score' WHERE `pseudocode` = '$pseudo'");
  $insertVoter = mysqli_query($conn,  "INSERT INTO traffic (page, visitorip, number_of_vote, contestants, date_voted) VALUES('home', '$visitor_ip', '1', '$pseudo', NOW())");

  $allVotes = mysqli_query($conn, "INSERT INTO votes (contestantsid, votecount) VALUE ('$contestant_id', '1')");
  if ($allVotes) {

      header("Location: ?thankyou=1");

  } else {

      header("Location: ?error=true");

  };

}

?>
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
      // if votting is turned on/off
      if ($_SESSION['VOTTING_STATUS'] == 0) {

          header("Location: ?vottingclosed=1");

      } else {

        $pseudoCode = $_GET['q'];

        $selectQuery = "SELECT * FROM contestants WHERE pseudocode = '$pseudoCode'";
        $result = mysqli_query($conn, $selectQuery);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            // initialize variables
            $contestant_id = $row['id'];
            $pseudo = $row['pseudocode'];
            $image = $row['image'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $scores = $row['scores'];

            // When free voting is setted or not
            if ($_SESSION['VOTTING_PRICE'] > 0) {

              require_once ('paycard.php');

            } else {

              $visitor_ip = $_SERVER['REMOTE_ADDR'];

              $checkVoter = mysqli_query($conn, "SELECT * FROM traffic WHERE visitorip='$visitor_ip'");
              // Check if voter by ip address already exist and calculate all it's total votes
              if (mysqli_num_rows($checkVoter) > 0) {

                $total_votes = 0;
                while ($row = mysqli_fetch_assoc($checkVoter)) {

                  $total_votes += $row['number_of_vote'];

                };
                // if voter by ip address total votes reaches maximum of votting setting
                if ($total_votes >= $_SESSION['VOTTING_MAX']) {

                  if ($_SESSION['VOTTING_MAX'] != 0) {

                    header("Location: ?votelimit=1");

                  };

                } else {

                  applyVote ($conn, $scores, $pseudo, $visitor_ip, $contestant_id);

                };// if voter by ip address total votes reaches maximum of votting setting. (code block ending)

              } else {

                applyVote ($conn, $scores, $pseudo, $visitor_ip, $contestant_id);

              };// Check if voter by ip address already exist and calculate all it's total votes. (code block ending)

            };// When free voting is setted or not. (code block ending)

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
        };

      };// if votting is turned on/off. (code block ending)

    } else {
        require ('./search.php');
        echo "<div class=\"container-xl\">";
        echo "<div id=\"contestantCards\" class=\"row\">";
        $sql = "SELECT * FROM contestants order by scores DESC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              // if votting is turned on/off
              if ($_SESSION['VOTTING_STATUS'] == 0) {

                include ('dv_card.php');

              } else {

                include ('card.php');

              };// if votting is turned on/off. (code block ending)

            };
        };
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
