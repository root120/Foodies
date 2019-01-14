<?php
function timeAgo($timestamp)
    {
      

    }
?>
<div class="container">    
  <!-- The Grid -->
  <div class="row">
    <!-- Left Column -->
    <div>
    <div class="col-xs-3" id = "sidebar">
      <!-- Profile -->
        <div class="jumbotron">
         <h4 class="text-center">My Profile</h4>
         <p class="text-center"><img src="<?php echo base_url('picture/my.jpg'); ?>" class="img-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="glyphicon glyphicon-education"></i> Programmer</p>
         <p><i class="glyphicon glyphicon-home"></i> Tilagor, Sylhet</p>
         <p><i class="glyphicon glyphicon-globe"></i> November 20, 1995</p>
      </div>

      <div >
        <div class="jumbotron">
          <p>Interests</p>
          <h4>
            <code >Ghum</code>
            <code>khani</code>
            <code>Ghura-Ghuri</code>
            <code>Programming</code>
            <code>Cricket</code>
          </h4>
        </div>
      </div>
    </div>
      <br>
      
    </div>
    
    <!-- Middle Column -->
    <div class="col-xs-6" style='overflow:auto;height:450px;'>
    
        <div class="">
            <div class="jumbotron">
              <form action="<?php echo base_url()?>index.php/Home_controller/add_post" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <textarea class = "form-control" name= "user_post" placeholder="Khanir kno post thakle ono korukka"></textarea>
                </div>
                <div class="form-group">
                  <input type="file" name="food_image" class="form-control" placeholder="Enter food image">
                </div>
              
              <button type="submit" class="btn btn-success glyphicon glyphicon-pencil pull-right"> <strong>Post</strong></button>
            </form>
          </div>
      </div>
      <?php foreach($get_all_post as $post) {?>

      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="<?php echo base_url("picture/my.jpg"); ?>" alt="Avatar" align = "left" class="img-circle" style="width:60px">
        <span class="pull-right">
          <?php
         $timestamp = $post->date;
          $timeago = strtotime($timestamp);
      $current_time = time();
      $time_difference = $current_time - $timeago;
      $seconds = $time_difference;
      $minutes = round($seconds / 60);
      $hours = round($seconds / 3600);
      $days = round($seconds / 86400);
      $weeks = round($seconds / 604800);
      $months = round($seconds / 2629440);
      $years = round($seconds / 31553280);
      if ($seconds<=60) {
        echo "just now";
      }
      elseif ($minutes<=60) {
        if ($minutes == 1) {
          echo "one minute ago";
        }
        else{
          echo "$minutes minutes ago";
        }
      }
      elseif ($hours<=24) {
        if ($hours == 1) {
          echo "an hour ago";
        }
        else{
          echo "$hours hours ago";
        }
      }
      elseif ($days<=7) {
        if ($days == 1) {
          echo "yesterday";
        }
        else{
          echo "$days days ago";
        }
      }
      elseif ($weeks<=4.3) {
        if ($weeks == 1) {
          echo "a week ago";
        }
        else{
          echo "$weeks weeks ago";
        }
      }
      elseif ($months<=12) {
        if ($months == 1) {
          echo "a month ago";
        }
        else{
          echo "$months months ago";
        }
      }
      else{
        if ($years == 1) {
          echo "one year ago";
        }
        else{
          echo "$years years ago";
        }
      }

        ?></span>
        <h4 style="margin-left: 70px;"><?php echo $post->first_name?></h4><br>
        <hr class="w3-clear">
        <p><?php echo $post->post; ?></p>
          <div class="w3-row-padding" style="margin:0 -16px">
            <div class="">
              <img src="<?php echo base_url()."uploads/user_pictures/".$post->image; ?>" style="width:100%" alt="Image">
            </div>
            
        </div>
        <button type="button" class="btn btn-success"> Like </button> 
        <button type="button" class="pull-right btn btn-success"> Comment</button> 
      </div>

      <?php } ?>
    
      <br>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="col-xs-3">
      <div class="w3-card w3-round w3-white w3-center">
          <p><strong>Winter offer</strong></p>
          <img src="<?php echo base_url('picture/res1.jpg'); ?>" alt="Forest" style="width:100%;">
          <p><strong>Mutton Full Roast a pacchen <code>20%</code> descount.</strong></p>
          <p>offer start at 01/12/2017</p>
          <p><button class="btn btn-info">Info</button></p>
      </div>
      <br>

      <div class="w3-card w3-round w3-white w3-center">
          <p><strong>Hot offer</strong></p>
          <img src="<?php echo base_url('picture/res2.jpg'); ?>" alt="Forest" style="width:100%;">
          <p><strong>Familly shoho ashle jekono khabare apni pacchen <code>20%</code> descount.</strong></p>
          <p>offer start at 01/12/2017</p>
          <p><button class="btn btn-info">Info</button></p>
      </div>
      <br>


      
      
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
    </div>
  
  </div>
</div>