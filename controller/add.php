<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:../index.html");
} else {
?>

<?php
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name = "viewport" content = "width-device-width, initial-scale =1.0, maximum-scale =1.0">
	<title>PHP Crud</title>
</head>
<body>
	<?php
$WebDevelopment = simplexml_load_file('../model/careers.xml');
if(isset($_POST['submitSave'])){

		if (strip_tags($_POST['careername']) != "" && strip_tags($_POST['technologies'])!= ""){
$career = $WebDevelopment->addChild('career');
$career -> addAttribute('id', strip_tags($_POST['id']));
$career ->addChild ('careername', strip_tags($_POST['careername']));
$career ->addChild ('technologies', strip_tags($_POST['technologies']));
file_put_contents('../model/careers.xml', $WebDevelopment->asXML());
header('location:managecareers.php');
		}else {?>
			<script>alert("You must fill out the field");</script>
			<?php
	}
}
include '../views/header2.php'?>
<nav style = "background:#3949ab; height:70px;">
    <div class="nav-wrapper ">
      <div class="col s12">
        <a style = "margin-left:55px" href="#!" class="breadcrumb" >My Career Oppurtunites</a>
		<a href="#!" class="breadcrumb" >Edit Career Options</a>
        <a href="#!" class="breadcrumb" >Add Career</a>

      </div>
    </div>
  </nav>
	<h3>Add Career</h3>
<form action = "" method="POST">

<label>Career:</label><input type="text" name="careername"><br>
<label>Main Technologies Used:</label><input type="text" name="technologies"><br>

 <button class="btn waves-effect waves-light" style = "background:darkblue; color:gold; width:180px; font-size:22px;" type="submit" name="submitSave">Add
    <i class="material-icons right">add</i>
  </button>
</form>

<?php include '../views/footer.php'?>
<head>

<meta name = "viewport" content = "width=device-width, initial-scale=1.0. maximum-scale=1.0">
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Php Crud</title>
</head>
