<?php
require('db.php');
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
      <h1 class="mt-4 mb-3">Welcome to Herbs and Remedies Website  
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Latest Announcement</li>
      </ol>
	  
	   <!-- Image Header -->
      <img class="img-fluid rounded mb-4" src="http://tmelixir.com/image/products/Tea-photos/herbs.jpg" alt="" style="width:1200px;height:300px;">


      <!-- Intro Content -->
      <div class="row">
      
        <div class="col-lg-12">
          <h2>Latest Announcement</h2>
		  
		  <?php
				$count=1;
				$sel_query="Select * from ann ORDER BY announceId asc;";
				$result = mysqli_query($con,$sel_query);
				while($row = mysqli_fetch_assoc($result)) { ?>
                  
					 
					   <h4><?php echo $count; ?>  <?php echo $row["announceTitle"]; ?></h4>
					   <p></p>
                      <p><?php echo $row["announceDesc"]; ?></p>					 
                     <?php $count++; } ?>
        
		  <br><br><br><br>
        </div>
      </div>
      <!-- /.row -->
<!-- services -->

<h2>Searching Here</h2>
 <div class="row">
 
        <div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="herbSearch.html"><img class="card-img-top" src="https://www.masterfoods.com.au/media/1462/header_images_desktop_0001_a-z-herbs-spices.jpg?anchor=center&mode=crop&width=560&height=340&rnd=131237742740000000" alt="" style="width:538px;height:300px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="herbSearch.php">Herbs in Malaysia</a>
              </h4>
              <p class="card-text">You can get information of herbs in Malaysia.</p>
            </div>
          </div>
        </div>
		
		<div class="col-lg-6 portfolio-item">
          <div class="card h-100">
            <a href="prediction.html"><img class="card-img-top" src="https://i0.wp.com/bonnieplants.com/wp-content/uploads/windowsill-herb-garden-is.jpg?resize=640%2C429&ssl=1" alt=""
			style="width:538px;height:300px;"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="prediction.php">Prediction for disease</a>
              </h4>
              <p class="card-text">You can get information about your disease and recommendation herbs for your disease.</p>
            </div>
          </div>
        </div>
		
        
		
		</div>
		
        
      <!-- services -->

      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Eddiemady 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
