<?php
require_once('connect.php');
if(!$connected)echo 'connection problem';

// fetching all courses and creating a table
function all_courses($semester){
	$query=mysql_query('SELECT * FROM courses WHERE semester='.$semester);
	echo '<h2>Course List for '.$semester.'</h2>';
	echo '<form action="" method="post"><table class="list">';
	echo '<tr class="bold"><td>Course Title</td><td>Course ID</td><td>Teacher Name</td></tr>';
		  $varCounter=0;
	while($result_array=mysql_fetch_assoc($query)):
		echo '<tr>';
		
	foreach(array_reverse($result_array) as $key=>$value):
	    if($key=='course_id'||$key=='name'):
		echo '<td>'.$value.'</td>';
		
		elseif($key=='id'):
		echo '<td><input type="text" name='.$value.'></input></td>';
		echo '<td><input type=\'button\' value =\'more\' class=\'more\'/></td>';
			for($i=0;$i<3;$i++):
			echo '<tr><td></td><td></td><td><input type="text" class='. '\'xtra' . $varCounter++ . '\'' . ' name='.$value.'></input></td></tr>';
			endfor;		
		
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
				
		// populating the relation table
	function teacher_course($post){
	$link=mysql_query('SELECT * FROM courses') or die(mysql_error());
	$rows=mysql_num_rows($link);
	if(isset($post['teacher']))	
	for($i=0;$i<$rows;$i++):
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
			
//checks if data exists in table			
function in_table($column,$table,$data){
$result = mysql_query("SELECT $column FROM $table") or die(mysql_error());
$trigger=0;
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
if(in_array($data,$row))$trigger=1;
}
if($trigger==0)return 0;
else return 1;
}

//checks if the password is ok
function valid_pass($name,$pass){
	try{
	$result=mysql_query("SELECT user_pass FROM users WHERE username='$name'");
	$passArray=mysql_fetch_assoc($result);
}catch(Exception $e){
	
	}
	if($pass==$passArray['user_pass'])  return true;
	else return false;	
	
	}
