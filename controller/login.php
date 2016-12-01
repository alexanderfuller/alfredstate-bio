
<?php
include '../model/db.php';
$output = '';
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}
?>
<?php

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location:../views/user.php");
	}
	} else {
 $output = 'Wrong username or password';

	}

} else {
    $output = 'All input fields need to be filled out.';
}

}
?>

<?php include '../views/header.php' ?>
<body>
<nav style = "background:#3949ab; height:70px;">
    <div class="nav-wrapper ">
      <div class="col s12">

        <a style = "margin-left:55px" href="#!" class="breadcrumb" >Account</a>
        <a href="#!" class="breadcrumb" >Login </a>
      </div>
    </div>
  </nav>

<h3>Login</h3>
<form action="" method="POST">
<label>Username:</label> <input type="text" name="user"><br />
<label>Password:</label> <input type="password" name="pass"><br />
<br>
 <button class="btn waves-effect waves-light" style = "background:darkblue; color:gold; width:180px; font-size:22px;" type="submit" name="submit">Log In
    <i class="material-icons right">send</i>
  </button>

</form>
<center><h4 style = "color:red"> <?php echo $output ?></h4></center>


<?php include '../views/footer.php' ?>
</body>
