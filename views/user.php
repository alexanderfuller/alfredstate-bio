<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:../index.html");
} else {
?>

<?php
}
?>
<?php include 'header2.php'?>
   <div class="slider" style = "background:#000099;">
    <ul class="slides">
      <li>
        <img src="../images/two.jpg"> <!-- random image -->
        <div class="caption center-align">

          <h3>My name is Alex and welcome to my Alfred State Student Bio Site!</h3>
		  <div class = "bar"></div>


        </div>
      </li>
      <li>
        <img src="../images/one.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Here you can find courses I've taken at Alfred State</h3>
            <div class = "bar"></div>
        </div>
      </li>
      <li>
        <img src="../images/three.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>And Information about myself and my Major</h3>
            <div class = "bar"></div>
        </div>
      </li>

    </ul>
  </div>
   <?php include 'footer.php'?>
