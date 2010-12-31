<?php
session_start();
include("header.php");
?>
<h2 class="headLine">Routine Generation and Management System</h2>

<form action="validate.php" method="post" id="login">
<input type="text" name="username"/>
<br/>
<input type="password" name="pass"/>
<br/>
<input type="submit" name="gg" value="submit"/>

</form>

	
<?php
include("footer.php");
?>
