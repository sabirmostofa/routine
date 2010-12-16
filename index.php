<?php require_once('library/functions.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Routine</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel='stylesheet' href="css/style.css"/>
<script src="js/jquery-1.4.4.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</head>

<body>
<div id='wrapper'>
<div id='header'>

</div>

<div id='navigation'>
</div>

<div id='inner-body'>
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


</div><!-- end wrapper-->
	
</body>
</html>
