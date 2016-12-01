<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:../index.html");
} else {
?>
<?php
}
?>


<?php
$WebDevelopment = simplexml_load_file('../model/careers.xml') or die ('xml did not load');

if(isset($_POST['submitSave'])) {
  foreach ($WebDevelopment->career as $career){
    if($career['id'] == $_POST['id']){
      $career['id'] = strip_tags($_POST['id']);
      $career->careername = strip_tags($_POST['careername']);
      $career->technologies = strip_tags($_POST['technologies']);
      break;
    }
  }
  file_put_contents('../model/careers.xml', $WebDevelopment->asXML());
  header('Location:managecareers.php');
}
foreach ($WebDevelopment->career as $career){
  if($career['id'] == $_GET['id']){
    $id = $career['id'];
    $careername = $career->careername;
    $technologies = $career->technologies;
  }
}
?>
<?php include '../views/header2.php'?>
<nav style = "background:#3949ab; height:70px;">
    <div class="nav-wrapper ">
      <div class="col s12">
        <a style = "margin-left:55px" href="#!" class="breadcrumb" >My Career Oppurtunites</a>
        <a href="#!" class="breadcrumb" >Edit Career Oppurtunities</a>
        <a href="#!" class="breadcrumb" >Edit Career </a>
      </div>
    </div>
  </nav>

<h3>Edit Career</h3>
<form action = "" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>"readonly><br>
<label>Career:</label><input type="text" name="careername" value="<?php echo $careername;?>"><br>
<label>Main Technologies Used:</label><input type="text" name="technologies" value="<?php echo $technologies;?>"><br>

 <button class="btn waves-effect waves-light" style = "background:darkblue; color:gold; width:180px; font-size:22px;" type="submit" name="submitSave">Submit
    <i class="material-icons right">send</i>
  </button>
</form>
<?php include '../views/footer.php'?>


<head>

<meta name = "viewport" content = "width=device-width, initial-scale=1.0. maximum-scale=1.0">
<title>Php Crud</title>


</head>
