<div class="col-md-3 col-sm-6 col-xs-12 mb-5">
    <div class='music-card playing'>
        <div class='image' style="background: url('./admin/uploads/<?php echo $row['image'];?>') no-repeat 75%; background-size: cover"></div>
        <div class='wave'></div>
        <div class='wave'></div>
        <div class='wave'></div>
        <div class='info'>
            <h2 class='title'><?php echo strtoupper($row['pseudocode']);?></h2>
            <div class='vote-result'><span>Vote Result:</span> <?php echo $row['scores'];?></div>
            <button class="bubbly-button2"><a href="?q=<?php echo $row['pseudocode'] ?>" style="text-decoration: none; color: #fff;">VOTE</a></button>
        </div>
    </div>
</div>
