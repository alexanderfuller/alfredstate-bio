

<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:../index.html");
} else {
?>

<?php
}
?>
<?php include '../views/header2.php'; ?>
<nav style = "background:#3949ab; height:70px;">
    <div class="nav-wrapper ">
      <div class="col s12">

		<a style = "margin-left:55px" href="#!" class="breadcrumb" >Career: Web Development</a>
        <a href="#!" class="breadcrumb" >Web Development Career Paths</a>

      </div>
    </div>
  </nav>
  <br>
  <h3>Web Development Career Paths</h3><br>

<?php

if (!$xml = simplexml_load_file('../model/careers.xml')){

	echo 'cannot load the xml file';

}else {

		foreach($xml as $WebDevelopment){




	   echo '<div class = "card-panel">';
      	echo'<h4>'.'<b style = "color:darkblue">Career:</b> ' . $WebDevelopment->careername .'</h4>'. '<br />';
			  echo'<h4>'. '<b style = "color:darkblue">Main Technologies Used:</b> ' .$WebDevelopment->technologies .  '</h4>'.'<br/>';

	          echo'</div>';


		}
}


?>
<?php include '../views/footer.php'?>
