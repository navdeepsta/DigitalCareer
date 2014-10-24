<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Digital Careers</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById(str).innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","teacher_info.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>

<body>
    <!-- <form action="teacher.php" method="post"> -->
  <!-- Database Connection -->
  
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ICT Student Engagement</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
					<li>
                        <a href="parent.php">Parent</a>
                    </li>
                    <li class="active">
                        <a href="teacher.php">Teacher</a>
                    </li>
                    <li>
                        <a href="advisor.php">Career Advisor</a>
                    </li>

                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#FF00FF">ICT for teachers
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="image/teacher.jpeg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
         <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="color:#FF00FF">Information and Communication Technology</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                       <img src="image/general-01.jpg" alt="">
                    </div>
                    <div class="panel-body">
                       <h4>General</h4>
					   <div id="general"></div>
                        <p>
						<?php if(isset($_POST['general']))
	                    {
		                        $query = "SELECT * from program_links where type = 'general' order by rating desc"; 
	 
	                         	$result = mysql_query($query) or die(mysql_error());

	                            echo "<ul>";
		                        while($row = mysql_fetch_array($result))
						    {
		
	                            echo "<li>"."<a href='".$row['url']."'>". $row['name'] ."</li>";

		
	                        }
	
                        }
                        echo "</ul>"; 
                        ?>
                       </p>             
					   
                     
                        <button type="submit" name="general" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         General programs
                       </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">

                        <img src="image/techwomen.gif" alt="">
                  
                    </div>
                    <div class="panel-body">
                        <h4>Women's Program</h4>
						 <div id="women"></div>
                        <p>
						
						<?php if(isset($_POST['women']))
	                    {
		                        $query = "SELECT * from program_links where type = 'women' order by rating desc"; 
	 
	                         	$result = mysql_query($query) or die(mysql_error());

	                            echo "<ul>";
		                        while($row = mysql_fetch_array($result))
						    {
		
	                            echo "<li>"."<a href='".$row['url']."'>". $row['name'] ."</li>";

		
	                        }
	
                        }
                        echo "</ul>";
                        ?>
						
						</p>
                        <button type="submit" name="women" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         Program for women
                       </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                     <img src="image/intern.jpeg" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>Internship</h4>
						 <div id="internship"></div>
                        <p>
						<?php if(isset($_POST['internship']))
	                    {
		                        $query = "SELECT * from program_links where type = 'internship' order by rating desc"; 
	 
	                         	$result = mysql_query($query) or die(mysql_error());

	                            echo "<ul>";
		                        while($row = mysql_fetch_array($result))
						    {
		
	                            echo "<li>"."<a href='".$row['url']."'>". $row['name'] ."</li>";

		
	                        }
	
                        }
                        echo "</ul>";
                        ?>
						
						</p>
                        <button type="submit" name="internship" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         Internships
                       </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        
                               <img src="image/uni.jpeg">
                    
                    </div>
                    <div class="panel-body">
                        <h4>university</h4>
						<div id="university"></div>
                        <p></p>
                       <button type="submit" name="university" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                        Universities
                       </button>
                    </div>
                </div>
            </div>  
        </div>

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="color:#FF00FF">How we help teachers</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"> Australian Curriculum</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"> Code Club</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"> ICT in Schools</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"> ICT in Primary Education </a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <h4></h4>
                        <p>Digital Technologies: developed by the Australian Curriculum Assessment and Reporting Authority (ACARA) and published on the Australian Curriculum website as available for use; the Australian Curriculum: Digital Technologies is awaiting final endorsement.</p>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4></h4>
                        <p>CodeClubs introduce young students to computational thinking and basic coding. Structured code clubs, such as CodeClub and CoderDojo, offer free, ready-made, materials and courses. Often schools are not aware these clubs are available – feel free to reach out to your local school and see if they are interested.</p>
                    </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4></h4>
                        <p>Digital Careers has collaborated with CSIRO’s successful ICT in Schools program to increase the level of industry engagement in our local school system. Mentors bring up-to-date industry knowledge into the classrooms – have you thought about working with an industry professional to assess year 12 assignments, gain real world case studies for IT technicalities or involving someone to host a Code Club at your local school? </p>
                    </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4></h4>
                        <p>Transforming children’s learning across the curriculum (MOOC):  The Institute of Education, University of London and the UNESCO Institute for IT in Education are collaborating to run this professional development course for teachers, headteachers and policymakers working in the Primary Education sector.</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
      
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

					 <!--  </form> -->
					   


</body>

</html>
