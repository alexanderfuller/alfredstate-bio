
<?php
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:../index.html");
} else {
?>

<?php
}
?>

<?php include '../views/header2.php'?>


  <br>
<br><br>
<center><h3>My Courses</h3></center>
  <div class="row" >

        <div class="card-panel">
         <div id='showClass' style = "height:300px;"></div><br>
		 <center>
<button class="btn waves-effect waves-light next"  type="submit" name="submitSave" onclick="previous()">
    <i class="material-icons right">navigate_before</i>
  </button>
  <button class="btn waves-effect waves-light next2"  type="submit" name="submitSave" onclick="next()">
    <i class="medium material-icons">navigate_next</i>
  </button>
</center>
        </div>
		<div id="CourseInfo">
     <center><a class="waves-effect waves-light classes"  onclick="loadXML('../model/courses.xml')">Display All Courses</a></center>
	 </div>
    </div>
<div id='showClass'></div><br>

<?php include '../views/footer.php'?>
