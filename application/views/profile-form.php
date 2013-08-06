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
		
		<!--
    <div class="well">
    <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
    <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
    <div class="tab-pane active in" id="home">
    <form id="tab">
    <label>Username</label>
    <input type="text" value="jsmith" class="input-xlarge">
    <label>First Name</label>
    <input type="text" value="John" class="input-xlarge">
    <label>Last Name</label>
    <input type="text" value="Smith" class="input-xlarge">
    <label>Email</label>
    <input type="text" value="jsmith@yourcompany.com" class="input-xlarge">
    <label>Address</label>
    <textarea value="Smith" rows="3" class="input-xlarge">2817 S 49th
    Apt 314
    San Jose, CA 95101
    </textarea>
    <label>Time Zone</label>
    <select name="DropDownTimezone" id="DropDownTimezone" class="input-xlarge">
    <option value="-12.0">(GMT -12:00) Eniwetok, Kwajalein</option>
    <option value="-11.0">(GMT -11:00) Midway Island, Samoa</option>
    <option value="-10.0">(GMT -10:00) Hawaii</option>
    <option value="-9.0">(GMT -9:00) Alaska</option>
    <option selected="selected" value="-8.0">(GMT -8:00) Pacific Time (US & Canada)</option>
    <option value="-7.0">(GMT -7:00) Mountain Time (US & Canada)</option>
    <option value="-6.0">(GMT -6:00) Central Time (US & Canada), Mexico City</option>
    <option value="-5.0">(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima</option>
    <option value="-4.0">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
    <option value="-3.5">(GMT -3:30) Newfoundland</option>
    <option value="-3.0">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
    <option value="-2.0">(GMT -2:00) Mid-Atlantic</option>
    <option value="-1.0">(GMT -1:00 hour) Azores, Cape Verde Islands</option>
    <option value="0.0">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
    <option value="1.0">(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
    <option value="2.0">(GMT +2:00) Kaliningrad, South Africa</option>
    <option value="3.0">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
    <option value="3.5">(GMT +3:30) Tehran</option>
    <option value="4.0">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
    <option value="4.5">(GMT +4:30) Kabul</option>
    <option value="5.0">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
    <option value="5.5">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
    <option value="5.75">(GMT +5:45) Kathmandu</option>
    <option value="6.0">(GMT +6:00) Almaty, Dhaka, Colombo</option>
    <option value="7.0">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
    <option value="8.0">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
    <option value="9.0">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
    <option value="9.5">(GMT +9:30) Adelaide, Darwin</option>
    <option value="10.0">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
    <option value="11.0">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
    <option value="12.0">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
    </select>
    <div>
    <button class="btn btn-primary">Update</button>
    </div>
    </form>
    </div>
    <div class="tab-pane fade" id="profile">
    <form id="tab2">
    <label>New Password</label>
    <input type="password" class="input-xlarge">
    <div>
    <button class="btn btn-primary">Update</button>
    </div>
    </form>
    </div>
    </div>
-->     
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
