<?php
$q = Strval($_GET['q']);



  $host        = "host=localhost";
  $port        = "port=5432";
  $dbname      = "dbname=postgres";
  $credentials = "user=postgres password=root";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
    }
   
$sql="SELECT * FROM program_links WHERE type = '".$q."'"."order by rating desc";
$result = pg_query($db, $sql);

echo "<ul class='nav nav-tabs nav-stacked'>";
while($row = pg_fetch_row($result))
  {
    echo "<li>"."<a href='".$row[0]."'>". $row[1] ."</li>";
  }
echo "</ul>";
 pg_close($db);
?>