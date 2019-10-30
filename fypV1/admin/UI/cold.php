<?php
require("db.php");
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

   <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Herbs and Remedies</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
	
	<style type="text/css">
	
	th, td {
    padding: 8px;
    text-align: left;
	
	 #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 600px;
   	height: 400px;
   }
	</style>
	


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="homepage.html">Herbs and Remedies in Malaysia</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
			</ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Prescription Recomendation
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="homepage.php">Home</a>
        </li>
		    <li class="breadcrumb-item active">
				 <a href="prediction.php">Symptom Prediction</a>
			</li>
        <li class="breadcrumb-item active">Disease: Cold and Flu</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image 
          <img class="img-fluid rounded" src="http://1.bp.blogspot.com/-8plN_b-IyZU/TWW7Onijn1I/AAAAAAAAB2M/HadTGEEdxPk/s1600/IMG_4945.JPG" alt="pokok kemangi">-->

          <hr>

      
          <p>Posted on April 25, 2018 at 12:00 PM</p>

          <hr>

          <!-- Post Content -->
				  
          <p class="lead"><b>Disease : Cold and Flu</b></p>
		  
		  <p>Disease that you have is Cold and Flu. Below have information of disease, herb recommendation and prescription method.</p>
		 
		  
		  <?php
				$count=1;
				$sel_query="Select * from disease where diseaseId = 'dis1';";
				$result = mysqli_query($con,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
                  
					 
					   <h5><?php echo $row["diseaseName"]; ?> Information</h5>
					   <p></p>
                      <p><?php echo $row["diseaseDesc"]; ?></p>					 
                     <?php $count++; } ?>
					
						<h5>Symptoms and signs of Disease</h5>
						
						<?php
				$count=1;
				$sel_query="Select * from symptom where symId ='sym29' or symId ='sym9' or symId ='sym23' 
				or symId ='sym30' or symId ='sym6' or symId ='sym25' or symId ='sym18';";
				$result = mysqli_query($con,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
                  
					 
					   <p><?php echo $count; ?>. <?php echo $row["symName"]; ?></p>
					   <p></p>                     			 
                     <?php $count++; } ?>
				
				
				
				<h5>Herbs Recommendation</h5>	
				
				
				<?php
				$count=1;
				$sel_query="Select * from images where id ='9' or id ='10' or id ='11' ;";
				$result = mysqli_query($con,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
                  
					 
					   <p><?php echo $count; ?>. <?php echo $row["image_text"]; ?></p>
					   <p><?php echo"<img src='../images/".$row['image']."' />";?></p>
					   <p></p>                     			 
                   <?php $count++; } ?>
			
				
				<h5>Prescription Method</h5>
				
					<?php
				$count=1;
				$sel_query="Select * from prescription where prescriptionId ='pre6' or prescriptionId ='pre7' or prescriptionId ='pre8';";
				$result = mysqli_query($con,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
                  
					 
					   <p><?php echo $count; ?>. <?php echo $row["preName"]; ?></p>
					   <p><?php echo $row["preDesc"]; ?></p>
					   <p></p>                     			 
                   <?php $count++; } ?>
				
				
				
		
				
	
			
				<br><br>
          

                

          

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">misai kucing</a>
                    </li>
                    <li>
                      <a href="#">cough</a>
                    </li>
                    <li>
                      <a href="#">tongkat ali</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">fever</a>
                    </li>
                    <li>
                      <a href="#">honey</a>
                    </li>
                    <li>
                      <a href="#">lime</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

       

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
