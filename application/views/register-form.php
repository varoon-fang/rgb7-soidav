<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  
	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
       <div class="span3">
	    <h2>Sign Up</h2>
		   
			<?= form_open('register/confirm_register', array('id' => 'contact-form', 'name' => 'myform'));?>   
			    <div class="control-group">
				  <label class="control-label" for="name">Username :</label>
				  <div class="controls">
				     <input type="text" name="username" required="required" id="username" class="span3">
				  </div>
				</div>
			   
				<div class="control-group">
				  <label class="control-label" for="name">Email address :</label>
				  <div class="controls">
				     <input type="email" name="email" required="required" id="email" class="span3">
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="name">Password :</label>
				  <div class="controls">
				     <input type="password" name="password" required="required" id="password" class="span3">
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="name">Confirm password :</label>
				  <div class="controls">
				     <input type="password" name="c_pass" required="required" id="c_pass" class="span3">
				  </div>
				</div>
		    
			    <label><input type="checkbox" required="required" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
			    <input type="submit" value="Sign up" name="submit" class="btn btn-primary pull-right">
		    <div class="clearfix"></div>
		    <?= form_close();?>
	    </div>
      </div><!-- container-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div> <!-- /container -->
<!-- Validate-->
<script src="assets/js/jquery.validate.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/script.js"></script> 
    

  </body>
</html>
