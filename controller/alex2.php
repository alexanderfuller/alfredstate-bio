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

		<a style = "margin-left:55px" href="#!" class="breadcrumb" >About Me</a>
        <a href="#!" class="breadcrumb" >About Me (Databinded Version)</a>

      </div>
    </div>
  </nav>
  <h3>About Me (Databinded Version)</h3>
<?php

if (!$xml = simplexml_load_file('../model/alex.xml')){

	echo 'cannot load the xml file';

}else {

		foreach($xml as $user){


        echo'<h4>'. '<b>Full Name:</b> ' .$user->firstname . '&nbsp'. $user->middlename . '&nbsp' . $user->lastname .'</h4>'.'<br/>';
      	echo'<h4>'.'<b>Date of Birth:</b> ' . $user->dob .'</h4>'. '<br />';
			  echo'<h4>'. '<b>Address:</b> ' .$user->street . '&nbsp'. $user->city . '&nbsp' . $user->state . '</h4>'.'<br/>';
		    echo'<h4>'. '<b>Occupation:</b> ' . $user->occupation .'</h4>'. '<br/>';
      echo'<h4>'. '<b>College:</b> '. $user->college . '</h4>'.'<br/>';
      echo'<h4>'. '<b>Major:</b> '. $user->major .'</h4>'. '<br/>';
			echo'<h4>'. '<b>Phone:</b> ' . $user->contact->phone .'</h4>'. '<br />';
			echo'<h4>'. '<b>Email:</b> ' . $user->contact->email .'</h4>'. '<br />';



		}
}


?>
<?php include '../views/footer.php'?>
