<?php
include('auth.php');
include('header.php');

?>

<div id='navigation'>
<ul id='navigate'>
<li> <a href='teachers.php'>Teachers Panel</a></li>
<li></li>
<li></li>
</ul>
</div>

<div id='inner-body'>
<div class='logout'>
<form action='logout.php' method='post'>
<input type='submit' name='logout' value='logout'/>

</form>
</div>
<div id='course-selector'>

<form action="" method='post'>
<select name='selector' id='selector'>
<option value='11'>1st yr 1st sm</option>
<option value='12'>1st yr 2nd sm</option>
<option value='21'>2nd yr 1st sm</option>
<option value='22'>2nd yr 2nd sm</option>
<option value='31'>3rd yr 1st sm</option>
<option value='32'>3rd yr 2nd sm</option>
<option value='41'>4th yr 1st sm</option>
<option value='42'>4th yr 2nd sm</option>
</select>
<input type='submit' name='form-course' value='View the List'></input>
</form>

<?php 
all_semesters($_POST);
?>
</div>
<?php 
teacher_course($_POST);

?>


</div><!-- inner body-->

<div id='footer'>
</div>

<?php
include('footer.php');
?>



