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
  xmlhttp.open("GET","advisor_info.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>

<body>
    <!-- <form action="advisor.php" method="post"> -->
  <!-- Database Connection -->
    <?php
     $host        = "host=localhost";
   $port        = "port=5432";
   $dbname      = "dbname=postgres";
   $credentials = "user=postgres password=root";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
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
					<li>
                        <a href="teacher.php">Teacher</a>
                    </li>
                    <li class="active">
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
                <h1 class="page-header" style="color:#FF00FF">Information for
                    <small>Career Advisor</small>
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
                <img class="img-responsive" src="image/advisor.jpeg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="color:#FF00FF">Different Jobs List</h2>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="image/hello-world.jpg" width="600" height="300">
                    </div>
                    <div class="panel-body">
                        <h4></h4>
						 <div id="Helpful"></div>
                        <p>
						
					
                         <button type="submit" name="Helpful" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         Help People
                       </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                       <img src="image/marketing.jpg" width="600" height="300">
                    </div>
                    <div class="panel-body">
                        <h4></h4>
						<div id="Marketing"></div>
                     
                       <button type="submit" name="Marketing" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         Marketing and Sales
                       </button>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="image/business.jpg" width="600" height="300">
                    </div>
                    <div class="panel-body">
                        <h4></h4>
						<div id="Business Analysis"></div>
                        
                        <button type="submit" name="Business Analysis" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         Business Analysis
                       </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                       <img src="image/creative.jpg" width="600" height="300">
                    </div>
                    <div class="panel-body">
                        <h4></h4>
						<div id="Creative"></div>
                       
                        <button type="submit" name="Creative" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         Creativity and Innovation
                       </button>
                    </div>
                </div>
            </div>
			      <div class="col-lg-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                       <img src="image/engineering.jpg" width="600" height="300">
                    </div>
                    <div class="panel-body">
                        <h4></h4>
						<div id="Engineering"></div>
                        
                         <button type="submit" name="Engineering" onclick="showUser(this.name)" class="btn btn-primary btn-lg btn-block">
                         Engineering and Technical
                       </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Tabs -->
        

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
<!-- </form> -->
</body>

</html>
