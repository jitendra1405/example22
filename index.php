<?php
$dbconn = pg_connect("host=ec2-54-83-192-245.compute-1.amazonaws.com port=5432 dbname=d1v08e1131dl3s user=lcxoevwjufwdds password=421891cb21108eeac80d70cebf134fd37484a798916eec41f33d973cd1a03cf9");

echo
"<form action='' method='post'>

First Name: <input type='text' name='name'/><br/>
Last Name: <input type='text' name='lname'/><br/>
Email: <input type='text' name='email'/><br/>
<input type='submit' name='use_button' value='something' />
</form>";

if(isset($_POST['use_button']))
{
	$x=$_POST['name'];
	$y=$_POST['lname'];
	$z=$_POST['email'];
	$sql = "INSERT into contact.contact (FirstName,LastName,Email) values ('".$x."','".$y."','".$z."')" ;
                pg_query($dbconn, $sql); 
}
pg_close($dbconn);
?>
