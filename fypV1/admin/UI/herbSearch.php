<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Autocomplete Textbox using Bootstrap Typehead with Ajax PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 </head>
 <body>
  <br /><br />
  
  
  

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Search Herb Information</a>
        </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="homepage.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Search Herb Information</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://static.wixstatic.com/media/db8ba4_36c33f6de015492eb6f1a3c38acf0847.jpg/v1/fill/w_623,h_344,al_c,q_80,usm_0.66_1.00_0.01/db8ba4_36c33f6de015492eb6f1a3c38acf0847.webp" alt="">

          <hr>


          <!-- Post Content -->
        

          <p>Here you can search Herbs Information. You can get the herbs name, scientific name, family name, herbs picture and etc.</p>
		  
		  <table class="table">
  
      <tr>
        <th>Search</th>
        <th>:</th>
         <th><input class="form-control" id="sym1" name="sym1" minlength="5" type="text" required /></th>
      </tr>
     
	    
  </table>
				<p id="demo"></p>
				
			<div class="text-center">
				<button onclick="myFunction()" class="btn btn-primary">Submit</button>
				<button onclick="clearFunc()" class="btn btn-primary">Clear</button>
			</div>
					<script>
						function myFunction() {
						var sim1 = document.getElementById("sym1").value;
					
						var text;
	
	
						//guava
						if (sim1 == "Guava Leaf") {
							var txt = "here";
										
							text = "Found it! "+ "<br>"+ "Click " 
							+ txt.link("guava.php") + " to see all the info about it.";
							
						}
						//sendok
						else if (sim1 == "Sendok Leaf") {
							var txt = "here";
										
							text = "Found it! "+ "<br>"+ "Click " 
							+ txt.link("sendok.php") + " to see all the info about it.";
					
						}
						
						//kayu putih
						else if (sim1 == "Kayu Putih Leaf") {
							var txt = "here";
										
							text = "Found it! "+ "<br>"+ "Click " 
							+ txt.link("kayu.php") + " to see all the info about it.";
							
						}
						
						else if (sim1 == "Turmeric") {
							var txt = "here";
										
							text = "Found it! "+ "<br>"+ "Click " 
							+ txt.link("turmeric.php") + " to see all the info about it.";
															
								
						}
						
						else if (sim1 == "Lime Root") {
							var txt = "here";
										
							text = "Found it! "+ "<br>"+ "Click " 
							+ txt.link("lime.php") + " to see all the info about it.";
											
						}
						
						else if (sim1 == "Kemangi") {
							var txt = "here";
										
							text = "Found it! "+ "<br>"+ "Click " 
							+ txt.link("kemangi.php") + " to see all the info about it.";
							
						}
							
						// If the letter is anything else
						 else {
							text = "Sorry there is no info about that!";
							sim1 = document.getElementById("sym1").value  = '';
							 
							
						}
						document.getElementById("demo").innerHTML = text;
					}
					
					
					
					
					function clearFunc()
					{
					
					
							sim1 = document.getElementById("sym1").value  = '';
							text = document.getElementById("demo").value  = '';
							
					
					}
					</script>


					

	
		<!--	<div class="text-center">

				<a onclick="myFunction()" class="btn btn-primary" type="submit" name="submit">Submit</a>

			</div>-->
			
		
  

	
		<br><br>
        

         

        
        </div>
		
		

       

         

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Eddiemady 2018</p>
      </div>
      <!-- /.container -->
    </footer>
 </body>
</html>

<script>
$(document).ready(function(){
 $('#sym1').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"fetch2.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>


