<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/css/bootstrap.min.css">
	 <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/css/w3.css">
	 <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/js/bootstrap.min.js">
	 <link rel="stylesheet" href = "<?php echo base_url(); ?>/Bootstrap/js/jquery.min.js">
   
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <style> 
  body{ 

    background-image: url("<?php echo base_url('picture/picture3.jpg'); ?>");
    min-height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
h1 {
  padding-left: 320px;
   font-weight: bold;
    font-size: 50px;
    text-align: center;
    text-transform: uppercase;
    color: #FFFFFF;
    font-family: "Lato", sans-serif;
}

.container {
    padding: 300px 10px;
    margin-left: 0px;
}
  .modal-header, h4, .close {
      background-color: #f4511e;
      color: #fff;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
</style>
</head>

<body>
	<div class = "container">
		<h1 class = "display-4"> WELCOME TO FOODIES WORLD</h1>
    <div style="padding-left: 750px;"><button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Log in</button>
    </div>
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header" style = "padding:35px 50px;">

            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-user"></span> Login</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">

            <form method="post" action="<?php echo base_url()?>index.php/Login_controller/login_validation">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name ="email" placeholder="Enter email">
                <span class="text-denger"> <?php echo form_error('email'); ?></span>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
                <span class="text-denger"> <?php echo form_error('password'); ?></span>
              </div>
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
              <div class="form-group">
                <input type="submit" name = "insert" value = "Login" class="btn btn-default"></input>
                <?php
                echo $this->session->flashdata("error");

                ?>
              </div>
              
            </form>
          </div>
          <div class="modal-footer">
             <button type="submit" class="btn btn-success btn-block" data-toggle="modal" data-target="#mySign" data-dismiss="modal"><span class="glyphicon glyphicon-log-in" ></span> Not a member ? <strong> Sign up</strong> here</button>

             <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myRes" data-dismiss="modal"><span class="glyphicon glyphicon-log-in" ></span> Restaurant owner ? <strong> Registrtion </strong> here</button>
            
            <p>Forgot <a href="#">Password?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class = "modal fade" id = "mySign">
               <div class = "modal-dialog">
                <div class = "modal-content">
                  <div class="modal-header" style = "padding:35px 50px;">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-pencil"></span> Sign up</h4>
                  </div>
                  <div class="modal-body" style="padding: 40px 50px;">
                    <form method="post" action="<?php echo base_url()?>index.php/Login_controller/form_validation"> 
                      <div class="form-group">
                        <label>First name:</label>
                        <input type="text" class = "form-control" name="first_name" placeholder="First name">
                        <span class="text-denger"><?php echo form_error("first_name");?></span>
                      </div>

                      <div class="form-group">
                        <label for = "last_name">Last name:</label>
                        <input type="text" class = "form-control" name="last_name" placeholder="Last name">
                        <span class="text-denger"><?php echo form_error("last_name");?></span>
                      </div>

                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class = "form-control" name="email" placeholder="Enter email">
                        <span class="text-denger"><?php echo form_error("email");?></span>
                      </div>

                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class = "form-control" name="password" placeholder="Enter password">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Re-password:</label>
                        <input type="password" class = "form-control" name="re_password" placeholder="Enter password">
                      </div>
                      <div class="form-group">
                         <input type="submit" class="btn btn-primary" name="insert" value="Insert" ></input>
                         <?php
                echo $this->session->flashdata("error");

                ?>
                        
                      </div>
                     
                    </form>
                  </div>
                  
                </div>
                 
               </div>
             </div>



                <div class = "modal fade" id = "myRes">
               <div class = "modal-dialog">
                <div class = "modal-content">
                  <div class="modal-header" style = "padding:15px 10px;">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-pencil"></span> Sign up for Restaurant</h4>
                  </div>
                  <div class="modal-body" style="padding: 20px 30px;">
                    <form>
                      <div class="form-group">
                        <label>name:</label>
                        <input type="text" class = "form-control" name="username" placeholder="Restaurant name">
                      </div>

                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class = "form-control" name="email" placeholder="Enter email">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class = "form-control" name="password" placeholder="Enter password">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Re-password:</label>
                        <input type="password" class = "form-control" name="Re-password" placeholder="Enter password">
                      </div>

                      <div class="form-group">
                        <label for="code">Zip Code:</label>
                        <input type="text" class = "form-control" name="code" placeholder="Zip code">
                      </div>

                      <div class="form-group">
                        <label for="city">City:</label>
                        <input type="tetx" class = "form-control" name="city" placeholder="City">
                      </div>

                      <button type="button" class="btn" style="background-color: #f4511e; color: #fff;">Sign up</button>
                    </form>
                  </div>
                  
                </div>
                 
               </div>
             </div>

	<div class="jumbotron jumbotron-fluid">
		<div id="about">
  			<h3 class="text-center text-align">ABOUT WEBSITE</h3>
  			<p style = "padding: 20px; ">Foodies was founded end of 2016 by Peter van den Toorn and Benjamin Karskens with the main purpose of making it easier for people to find restaurants they like. By March 2017 the first version of the Foodies.com platform went live. <br><br>

        Users can rate, review and upload pictures of the restaurant and dishes they have eaten, making it easy for other people to get an impression of the restaurant and the menu. <br><br>

        Restaurants can promote their business locally for free on the platform by posting news updates and Deals, which are shown in the timeline of users that are active within the area of the restaurant. Restaurants can upload their menu, pictures and reply to reviews by users.. <br><br></p>
 			<div class="row">
    			<div class="col-sm-4 text-center">
      				
      				<h2 class="text-center"><strong>FOYSOL AHMED SHUVO</strong></h2>
      				<h6 class="text-center"><i>Programmer, Webdevoloper</i></h6>
      				<h6 class="text-center"><i>&</i></h6>
      				<h6 class="text-center"><i>Real life problem solver</i></h6><br>
      				<img src="<?php echo base_url('picture/my.jpg'); ?>" class="img-circle w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="200" height="192">
    			</div>

    			<div class="col-sm-8 w3-hide-small w3-padding-large">
            <h3 class="text-center">ABOUT ME</h3><br>
      				<p>Welcome to my website. I am Foysol ahmed shuvo lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        			dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        			incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    			</div>
			</div>
		</div>
		</div>

</body>
</html>