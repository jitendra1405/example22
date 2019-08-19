<!DOCTYPE html>
<html lang="en">
  <body>
    Name: <input type="text" name="name">
	</body>
<?php

"<form action='' method='post'>
<input type='submit' name='use_button' value='something' />
</form>";

if(isset($_POST['use_button']))
{
	$dbconn = pg_connect("host=ec2-50-19-124-157.compute-1.amazonaws.com port=5432 dbname=d58o173hbaukt7 user=nfltllotkrgbnc password=6501404a979c7d7bb1da09c71cd54a6b83fb4986354072611d25bf3c0f0287e0");

         $sql = "INSERT into contact.contact (FirstName) values ('".$name."')" ;
                pg_query($dbconn, $sql); 


                            pg_close($dbconn);

}

?>
</html>
