<div class="s130">
  <form>
    <div class="inner-form">
      <div class="input-field first-wrap">
        <div class="svg-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
          </svg>
        </div>
        <input id="search" type="text"  name="search" placeholder="contestants name or number ex: EC30" />
      </div>
      <div class="input-field second-wrap">
        <button class="btn-search" type="submit" name="search_btn">SEARCH</button>
      </div>
    </div>
  </form>
</div>



<?php

if (isset($_REQUEST['search_btn'])) {

  $search = $_REQUEST['search'];
  $sql = 'SELECT * FROM contestants WHERE username="$search" OR id="$search"';
  $result = mysqli_query($conn, $sql);

  $data = array('res' => '', 'search' => array());

  if (mysqli_num_rows($result) > 0 && $result != '') {

    $data['res'] = 'OK';
    while ($contestant = mysqli_fetch_assoc($result)) {

      $contestant_html = "<div class='col-md-3 col-sm-6 col-xs-12 mb-5'>
        <div class='music-card playing'>
            <div class='image' style='background: url('". $contestant['image'] ."') no-repeat 75%; background-size: cover'></div>
            <div class='wave'></div>
            <div class='wave'></div>
            <div class='wave'></div>
            <div class='info'>
                <h2 class='title'>". strtoupper($contestant['pseudocode']) ."</h2>
                <div class='vote-result'><span>Vote Result:</span>". $contestant['score'] ."</div>
                <button class='bubbly-button2'><a href='pay.php?id='". $contestant['pseudocode'] ."' style='text-decoration: none; color: #fff;'>VOTE</a></button>
            </div>
        </div>
    </div>";
      array_push($data['search'], $contestant_html);

    };

  } else {

    $data['res'] = 'NONE';

  };

  echo json_encode($data);

}

?>
