<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<title>Feedback Survey</title>
</head>
<body>
<form action="test1.php" method="post" >
<h1>Please tick against those links that you found useful</h1>

<ul>
 <li><input type="checkbox" name="check_list[]" value = "Perth College"><a href = "http://www.perthcollege.wa.edu.au/teaching-learning/senior-school/year-8-template-2/"> Perth College</a> </li>
 
  <li><input type="checkbox" name="check_list[]" value = "Fintona"><a href = "http://www.fintona.vic.edu.au/learning/technology" > Fintona</a> </li>
  
   <li><input type="checkbox" name="check_list[]" value = "Moorebank High School"><a href = "http://www.moorebank-h.schools.nsw.edu.au/faculties/computing/stage-4-year-8 "> Moorebank High School</a> </li>
   
   <li><input type="checkbox" name="check_list[]" value = "Wenona"><a href = "http://www.wenona.nsw.edu.au/teachinglearning/ictprogram.cfm"> Wenona</a> </li>
	
	<li><input type="checkbox"name="check_list[]" value = "Salisbury High School"><a href = "http://www1.salisburyhigh.sa.edu.au/learning-areas/ict.html "> Salisbury High School</a> </li>
	
 <li><input type="checkbox"name="check_list[]" value = "ACS Foundation"><a href="http://www.acsfoundation.com.au/index.cfm?action=scholarships&temID=currentscholar"> ACS Foundation</a> </li>

<li><input type="checkbox"name="check_list[]" value = "Australian Government ICT Entry-level Programs"><a href = "http://australia.gov.au/topics/employment-and-workplace/australian-government-jobs/ict-entry-level-programs"> Australian Government ICT Entry-level Programs</a> </li>

<li><input type="checkbox"name="check_list[]" value = "ICT Internship Programme"><a href = "https://employment.gov.au/ict-internship-programme"> ICT Internship Programme</a> </li>

<li><input type="checkbox"name="check_list[]" value = "Australian Government ICT Program"><a href = "http://www.graduateopportunities.com/employers/australian-govt-ict/"> Australian Government ICT Program</a> </li>

<li><input type="checkbox"name="check_list[]" value = "Australian Programs"><a href = "http://www.internships.com.au/australian-programs/"> Australian Programs</a> </li> 
	
	 <li><input type="checkbox" name="check_list[]" value = "Mitcham Primary School"><a href = "http://www.mitcham.ps.vic.edu.au/ict" > Mitcham Primary School</a> </li>

	
	 <li><input type="checkbox" name="check_list[]" value = "Warners Bay Public School"><a href = "http://www.warnersbayps.com.au/program/ict/our-ict-program/" > Warners Bay Public School</a> </li>
	 <li><input type="checkbox" name="check_list[]" value = "Beaumaris North Primary School"><a href = "http://www.beaumarisnorthps.vic.edu.au/ict-programs.html" > Beaumaris North Primary School</a> </li>
	 <li><input type="checkbox" name="check_list[]" value = "Digital Teaching & Learning Victoria"><a href = "http://ictev.vic.edu.au/" > Digital Teaching & Learning Victoria</a> </li>
</ul>
<input type="submit" name="submit" value="submit">
</form>
<?php
echo "navdeep";
$data = array();
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
//echo $selected;
 $data[] = $selected;
 
}

}
}


  
   $db = pg_connect("host=ec2-54-197-241-96.compute-1.amazonaws.com  dbname=dsid2tcjtl6nq    user=ntgkjqbatkjsbv   password=SnqBM0mgxMKwzuNbuhZKdADzUl") or die("Could not connect:".pg_last_error());
   if(!$db){
      echo "Error : Unable to open database\n";
   } 
   

if(isset($_POST['submit']))
{
 $query = "SELECT * from program_links"; 
	 
 $result = pg_query($db, $query);
	
 while($row = pg_fetch_row($result)){
     

   foreach($data as $value)
	{
	
	   if($value == $row[0]){
	   
	     $rating = $row[2] + 1;
		 echo $rating;
		 $tmp = $value;
		 //echo $tmp;
	     $updateQuery = "update program_links set rating = '".$rating."'" . "where name = '".$tmp."'";
		 
		 pg_query($db,$updateQuery);
		
	   }
     }
   }
   pg_close($db);   
 }


?>

</body>
</html>