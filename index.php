<?php

echo
"<form action='' method='post'>
<input type='submit' name='use_button' value='something' />
Name: <input type='text' name='name'/>
</form>";

if(isset($_POST['use_button']))
{
	echo $name;
}

?>
