<?php
class DB_Connect
{
    public function connect()
    {
     $host = "ec2-174-129-227-80.compute-1.amazonaws.com";
     $user = "hqolsipojtnecl";
     $password = "64306f4dd68d73a8a477652e710ede2520086af42fc9e2dca049f2eb1debfab6";
     $dbname = "de4bcai2dahkqm";
     $port = "5432";
      $db = pg_connect( "$host  $user $password $dbname $port"  );
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

	
?>
