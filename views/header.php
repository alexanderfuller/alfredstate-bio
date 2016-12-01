<head>
	<title>Alfred State Bio</title>
	<!-- Compiled and minified CSS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href = "../css/materialize.min.css" rel = "stylesheet" type = "text/css">
<link href = "../css/style.css" rel = "stylesheet" type = "text/css">
<link href = "../css/mobilestyle.css" rel = "stylesheet" type = "text/css">
</head>
<header>
<ul id="dropdown1" class="dropdown-content" style = "height:100px; margin-top:143px;">
  <li><a href="../controller/alex.php">About Me (Databinded Version)</a></li>
  <li><a href="../model/alex.xml" target = "blank">About Me (XML Version)</a></li>
</ul>




<ul id="dropdown3" class="dropdown-content" style = "height:100px; margin-top:143px;">
  <li><a href="../controller/careers1.php">Web Development Career Paths</a></li>
    <li><a href="../controller/managecareers.php">Manage Web Development Career Paths</a></li>
	 <li><a href="../views/future.php">Future Employment</a></li>
</ul>

<ul id="dropdown4" class="dropdown-content" style = "height:100px; margin-top:143px;">
  <li><a href="../controller/login.php">Login</a></li>
  <li><a href="../controller/register.php">Register</a></li>

</ul>
<nav style = "background:gold;">

  <div class="nav-wrapper">

    <a href="#!" class="brand-logo" style = "color:#000099; background:gold; width:100%; ">  <img src = "../images/astate.png" style = "float:left; margin:0; height:100px"><b>Alfred State Student Bio:</b> &nbsp Alex Fuller</a>
	  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down" style = "width:100%; float:left; background:#000099;">
	 <li><a  href="../views/user.php"> <i class="tiny material-icons left">home</i>Home </a></li>
      <li><a  class="dropdown-button" href="#!" data-activates="dropdown1"><i class="tiny material-icons left">face</i>About Me<i class="material-icons right">arrow_drop_down</i></a></li>
       <li><a  href="../controller/courses.php"> <i class="tiny material-icons left">import_contacts</i>My Courses</a></li>
	  <li><a  class="dropdown-button" href="#!" data-activates="dropdown3"><i class="tiny material-icons left" >work</i>Web Development<i class="material-icons right" style="width:10px;">arrow_drop_down</i></a></li>
	  <li><a  class="dropdown-button" href="#!" data-activates="dropdown4"><i class="tiny material-icons left">perm_identity</i>Account<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
	<ul class="side-nav" id="mobile-demo">
        <li><a href="../index.html">Home</a></li>
        <li><a href="../controller/alex.php">About Me</a></li>
        <li><a href="../controller/courses.php">My Courses</a></li>
        <li><a href="../controller/careers1.php">Web Dev</a></li>


      </ul>
  </div>
</nav>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <script src="../js/slider.js"></script>
	<script src="../js/courses.js" type="text/javascript"></script>
</header>
