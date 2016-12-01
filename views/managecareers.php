<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:../views/middle.php");
} else {
?>

<?php
}
?>
<?php
$WebDevelopment = simplexml_load_file("../model/careers.xml") or die ("xml not loaded");
if(isset($_GET['action'])){
$id = $_GET['id'];
$index = 0;
$i = 0;

foreach($WebDevelopment->career as $career){
  if ($career['id'] == $id){
    $index = $i;
    break;
  }
  $i++;
}
  unset($WebDevelopment->career[$index]);
  file_put_contents('../model/careers.xml', $WebDevelopment-> asXML());
}
?>
<?php include '../views/header2.php'?>
<nav style = "background:#3949ab; height:70px;">
    <div class="nav-wrapper ">
      <div class="col s12">
        <a style = "margin-left:55px" href="#!" class="breadcrumb" >Career: Web Development</a>
        <a href="#!" class="breadcrumb">Manage Career Paths</a>

      </div>
    </div>
  </nav>
  <br>
 <h3>Manage Career Paths</h3>
&nbsp &nbsp <a href = "add.php" class="tooltipped btn-floating btn-large waves-effect waves-light " data-position="right" data-delay="50" data-tooltip="Add Career" style = "background:yellow"><i class="material-icons" style = "color:darkblue">add</i></a>

 <br>


<table class = "highlight">

<thead>

<tr>

<th>Career</th>
<th>Main Technologies Used</th>
<th>Edit</th>
<th>Delete</th>

</tr>
</thead>
<?php foreach($WebDevelopment->career as $career){?>
<tr>

  <td> <?php echo $career->careername; ?> </td>
  <td> <?php echo $career->technologies; ?> </td>
  <td>
   <a  style = "color:#000099;" href = "edit.php?id=<?php echo $career['id'];?>"><i class="small material-icons">create </i></a></td>

   <td><a  style = "color:#000099;" href = "managecareers.php?action=delete&id=<?php echo $career['id']; ?>"onclick = "return confirm('Are you sure you wanna do this?')"><i class="small material-icons">delete</i></a></td>
  </tr>
  <?php } ?>
</table>


<?php include '../views/footer.php'?>
