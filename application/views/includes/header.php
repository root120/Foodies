<?php 

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>header</title>
 <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/css/star-rating.min.css">
   <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/css/w3.css">
   <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/js/bootstrap.min.js">
   <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/js/jquery.min.js">


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
  <style type="text/css">

  .modal-header {
      background-color: #f4511e;
      color: #fff;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
        .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 50px 25px;
  }
  .container-fluid {
      padding: 60px 50px;
  }

  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  .navbar-login
{
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}

.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 87px;
}
.sidebar-nav-fixed {
  width:14%;
}

  </style>
</head>

<body>
	 <nav class = "navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-targer = "#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="#myPage">Foodies World</a>
      </div>
      <div class="collapse navbar-collapse" id= "myNavbar">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="#">User Post</a></li>
					<li><a href="#">Restaurant Post</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="glyphicon glyphicon-user"></span>
              <strong><?php echo $this->session->userdata('last_name'); ?></strong>
              <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="navbar-login">
                  <div class="row">
                    <div class="col-lg-4">
                      <p class="text-center">
                        <span class="glyphicon glyphicon-user icon-size"></span>
                      </p>
                    </div>
                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name'); ?></strong></p>
                                        <p class="text-left"><?php echo $this->session->userdata('email'); ?></p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm">view profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="btn-group btn-group-justified">
                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Settings</a>
                                            <a href=" <?php echo base_url().'Login_controller/logout'; ?>" class="btn btn-danger btn-xs">Logout</a>
                                        </div>



                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            
		</div>
	</div>

</nav>
<div class = "modal fade" id = "myModal">
               <div class = "modal-dialog">
                <div class = "modal-content">
                  <div class="modal-header" style = "padding:35px 30px; font-size: 30px">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-wrench"></span> Settings </h4>
                  </div>
                  <div class="modal-body" style="padding:40px 40px;">
                    <h2>Be Fair, be honest </h2> <br/>
                    <form action="<?php echo base_url()?>index.php/Home_controller/settings_profile" method="POST" enctype="multipart/form-data">
                      <div class="form-group well">
                        <label>Your are ?</label>
                        <select name="work">
                          <option value = "student">Student</option>
                          <option value = "employee">Employee</option>
                          
                        </select>
                      </div>

                      <br/>

                      <div class="form-group well">
                        <label>Your Location ?</label>
                        <input type="text" class = "form-control" name="location" placeholder="like: Tilagor, Sylhet">
                        <span class="text-denger"><?php echo form_error("location");?></span>
                      </div>

                      <br/>


                      <div class="form-group well">
                        <label for = "last_name">Date of Birth: </label>
                        <input class="form-control" name="dob" placeholder="Date of Birth" type="date">
                        <span class="text-denger"><?php echo form_error("last_name");?></span>
                      </div>

                      <br/> 

                      <div class="form-group well">
                        <label for="email">Upload a profile picture:</label>
                        <input type="file" name="profile_image" class="form-control">
                      </div>
                     <button type="submit" class="btn btn-success glyphicon glyphicon-pencil pull-right"> <strong>Update</strong></button>
                    </form>
                  </div>
                  
                </div>
                 
               </div>
             </div>

<div class="jumbotron text-center">
  <form class="form-inline">
    <div class="input-group" style="padding-top: 30px">
      <input type="text" class="form-control" size="40" placeholder="Search">
      <div class="input-group-btn">
        <button type="button" class="btn btn-primary">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </div>
    </div>
  </form>
</div>