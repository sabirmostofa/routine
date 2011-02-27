<?php
// preference page

include('header.php');

$days=array('saturday','sunday','monday','tuesday','wednesday','thursday');


$periods = array( '8:30-9:25', '9:25-10:20', '10:20-11:15', '11:15-12:10', '12:10-1:00','', '2:00-2:55',

'2:55-3:50','3:50-4:45','Select All');

?>

<div id='tabHolder'>
<table id='prefTable'>

<?php  

for( $day = 0 ; $day<7 ; $day++ ):
echo "<tr id=$day>";

for( $period = 0; $period < 11; $period++ ):

if($period == 0 && $day!=0 ){
//if($day!=6)	
echo '<td>'.$days[$day-1].'</td>';

}elseif($period == 0 && $day == 0){

echo '<td></td>';
}elseif($period != 0 && $day ==0 ){
	echo '<td>'.$periods[$period-1].'</td>';
	
	}
	elseif( $period == 10 && $day !=0){
		echo "<td  ><input class={$day} type='checkbox' /></td>";
		
		}

else{
?>

<td id='<?php echo 'check'.$day.$period  ?>'><input type='checkbox' /></td>

<?php
}


endfor;

echo '</tr>';


endfor;
?>


</table>
</div>
