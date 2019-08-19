<?php
class DB_Connect
{
    public function connect()
    {
      $host        = "ec2-50-19-124-157.compute-1.amazonaws.com";
      $port        = "port=5432";
      $dbname      = "d58o173hbaukt7";
      $credentials = "user=nfltllotkrgbnc password=6501404a979c7d7bb1da09c71cd54a6b83fb4986354072611d25bf3c0f0287e0";

      $db = pg_connect( " $url $host $port $dbname $credentials"  );
      if(!$db){
         echo "Error : Unable to open database\n";
      } else {
         echo "Opened database successfully\n";
      }
      return $db;
    }
}
$db1 = new DB_Connect();
    $conn = $db1->connect();

    $query = "insert into contact.contact(FirstName) values('Ravindra Nath')";
    $result = pg_query($conn,$query);
    echo $result;
	
?>