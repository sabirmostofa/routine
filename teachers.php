<?php
require_once('auth.php');
require_once('library/connect.php');
include('header.php');
$query="select name,initial,email from teachers";
$res=mysql_query($query);
echo '<table class=\'list\'><tr><td>Name</td><td>Initial</td><td>Mail</td></tr>';
while($array=mysql_fetch_assoc($res)):
echo '<tr>';
foreach($array as $key=>$value):
echo '<td>'.$value.'</td>';

endforeach;
echo '</tr>';

endwhile;
echo '</table>';


