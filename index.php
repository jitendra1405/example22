<?php
$dbconn = pg_connect("host=ec2-50-19-124-157.compute-1.amazonaws.com port=5432 dbname=d58o173hbaukt7 user=nfltllotkrgbnc password=6501404a979c7d7bb1da09c71cd54a6b83fb4986354072611d25bf3c0f0287e0");

echo
"<form action='' method='post'>
<input type='submit' name='use_button' value='something' />
Name: <input type='text' name='name'/>
</form>";

if(isset($_POST['use_button']))
{
	$x=$_POST['name'];
	$sql = "INSERT into contact.contact (FirstName) values ('".$x."')" ;
                pg_query($dbconn, $sql); 
}
pg_close($dbconn);
?>
