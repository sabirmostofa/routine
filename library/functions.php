<?php
require_once('connect.php');
if(!$connected)echo 'connection problem';

function all_courses($semester){
	$query=mysql_query('SELECT * FROM courses WHERE semester='.$semester);
	echo '<h2>Course List for '.$semester.'</h2>';
	echo '<form action="" method="post"><table class="list">';
	echo '<tr class="bold"><td>Course Title</td><td>Course ID</td><td>Teacher Name</td></tr>';
		  
	while($result_array=mysql_fetch_assoc($query)):
		echo '<tr>';
	foreach(array_reverse($result_array) as $key=>$value):
	    if($key=='course_id'||$key=='name'):
		echo '<td>'.$value.'</td>';
		
		elseif($key=='id'):
		echo '<td><input type="text" name='.$value.'></input></td>';
		endif;
		endforeach;	
		echo '</tr>';
		
	    endwhile;
	echo '</table>';
	echo '<input type="submit" value="submit" name="teacher"></input></form>';
	
}
	
	function all_semesters($var){
		if(isset($var['form-course']))all_courses($var['selector']);		
		}
		
		
	function teacher_course($post){
	if(isset($post['teacher']))	
	for($i=0;$i<100;$i++):
	if(isset($post[$i])):	
	$query=mysql_query("SELECT * FROM teachers WHERE name='$post[$i]'");
	while($res_array=mysql_fetch_assoc($query)):
		foreach($res_array as $key=>$value):
		if($key=='id'):
		$query1="INSERT INTO course_teacher(teacher_id,course_id) VALUES($value,$i)";
		mysql_query($query1) or die(mysql_error());
		
		endif;
		endforeach;
		endwhile;
	endif;	
	endfor;				
			}
