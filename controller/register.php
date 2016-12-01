<?php include '../views/header.php' ?>
<nav style = "background:#3949ab; height:70px;">
    <div class="nav-wrapper ">
      <div class="col s12">

        <a style = "margin-left:55px" href="#!" class="breadcrumb" >Account</a>
        <a href="#!" class="breadcrumb" >Register </a>
      </div>
    </div>
  </nav>
<h3>Register</h3>
<form action="" method="POST">
<label>Username:</label> <input type="text" name="user"><br />
<label>Password:</label> <input type="password" name="pass"><br />
<br>
<button class="btn waves-effect waves-light" style = "background:darkblue; color:gold; width:180px; font-size:22px; " type="submit" name="submit">Register
    <i class="material-icons right">send</i>
  </button>
</form>


<?php
include '../model/db.php';
$output = '';
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];



	$query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");
	$numrows=mysqli_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

	$result=mysqli_query($con, $sql);


	if($result){
	echo "<h5>Account Successfully Created</h5>";
	} else {
	echo "<h4 class='fail'>Failure!</h4>";
	}

	} else {
	echo "<h4>That username is taken. Please choose another username.</h4>";
	}

} else {
	echo "<h4>Please fill out all the fields.</h4>";
}
}
?>

<?php include '../views/footer.php' ?>
