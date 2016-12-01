<?php include '../views/header.php'?>
  <br>
<br><br>
<center><h3>My Courses</h3></center>
  <div class="row">
        <div class="card-panel">
         <div id='showClass' style = "height:300px;">
        </div>
         <button class="btn waves-effect waves-light next" type="submit" name="submitSave" onclick="previous()">
             <i class="medium material-icons">navigate_before</i>
           </button>
           <button class="btn waves-effect waves-light next2" type="submit" name="submitSave" onclick="next()">
             <i class="medium material-icons">navigate_next</i>
           </button>
         <br>

    </div>

  <a class="waves-effect waves-light classes" onclick="loadXML('../model/courses.xml')">Display All Courses</a>
	<div id="CourseInfo">
   </div>
    </div>
<div id='showClass'></div><br>

<?php include '../views/footer.php'?>
</body>
</html>
