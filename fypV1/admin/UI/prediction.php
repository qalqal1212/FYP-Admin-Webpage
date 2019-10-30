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
      <h1 class="mt-4 mb-3">Prediction of Disease</a>
        </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="homepage.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Symptom Checker</li>
      </ol>

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="https://www.richters.com/Icons/Herbs_Header.jpg" alt="">

          <hr>


          <!-- Post Content -->
        

          <p>Here you can get type of disease by searching the symptom. You will get the result disease and recommendation of herb remedy.</p>
		  
		  <table class="table">
  
      <tr>
        <th>Type Symptom 1</th>
        <th>:</th>
         <th><input class="form-control" id="sym1" name="sym1" minlength="5" type="text" required /></th>
      </tr>
	
	<tr>
        <th>Type Symptom 2</th>
        <th>:</th>
        <th><input class="form-control" id="sym2" name="sym2" minlength="5" type="text" required /></th>
      </tr>
	  
	  <tr>
        <th>Type Symptom 3</th>
        <th>:</th>
        <th><input  class="form-control" id="sym3" name="sym3" minlength="5" type="text" required /></th>
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
						var sim2 = document.getElementById("sym2").value;
						var sim3 = document.getElementById("sym3").value;
						
						var text;
	
	
						//diarrhea
						if (sim1 == "thin liquid" || sim1 == "fever" || sim1 =="vomiting" ) {
						
							if(sim2 == "thin liquid" || sim2 == "fever" || sim2 =="vomiting" ){
							
								if(sim3 == "thin liquid" || sim3 == "fever" || sim3 =="vomiting" ){
															
										text = "Your disease is Diarrhea ";
										var txt = "here";
										
										text = "Your disease is Diarrhea "+ "<br>"+ "Click " + txt.link("ciritRec.php") + " to get the suggestion treatment.";  
									}
								
								else{
							
							text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';
									
								}						
							
							
							}
								else {
							
								text = "Please input";
								sim1 = document.getElementById("sym1").value  = '';
								sim2 = document.getElementById("sym2").value  = '';
								sim3 = document.getElementById("sym3").value  = '';
								}
								
						} 
						
						//cold and flu
						else if (sim1 == "sneezing" || sim1 == "cough" || sim1 =="headache" || sim1 =="sorethroat" || sim1 =="head congestion" || sim1 =="chest congestion" || sim1== "muscle ache" || sim1== "fatigue"  )
							{
							
								if(sim2 == "sneezing" || sim2 == "cough" || sim2 =="headache" || sim2 =="sorethroat" || sim2 =="head congestion" || sim2 =="chest congestion" || sim2== "muscle ache" || sim2== "fatigue"  )	{
								
									if(sim3 == "sneezing" || sim3 == "cough" || sim3 =="headache" || sim3 =="sorethroat" || sim3 =="head congestion" || sim3 =="chest congestion" || sim3== "muscle ache" || sim3== "fatigue" )	{
									
										text = "Your disease is Cold and Flu ";
										var txt = "here";
										
										text = "Your disease is Cold and Flu "+ "<br>"+ "Click " + txt.link("cold.php") + " to get the suggestion treatment.";  
									}
									
									else{ text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
								
								}
								
								else{text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
							
							}
							
							//constipation
							else if (sim1 == "hard stool" || sim1 == "dry stool" || sim1 =="swelling abdomen" || sim1 =="difficulty when passing stools" || sim1 =="infrequent bowel movement" )
							{
							
								if(sim2 == "hard stool" || sim2 == "dry stool" || sim2 =="swelling abdomen" || sim2 =="difficulty when passing stools" || sim2 =="infrequent bowel movement" )	{
								
									if(sim3 == "hard stool" || sim3 == "dry stool" || sim3 =="swelling abdomen" || sim3 =="difficulty when passing stools" || sim3 =="infrequent bowel movement"  )	{
									
										text = "Your disease is Constipation ";
										var txt = "here";
										
										text = "Your disease is Constipation"+ "<br>"+ "Click " + txt.link("constipation.php") + " to get the suggestion treatment.";  
									}
									
									else{ text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
								
								}
								
								else{text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
							
							}
							
							
							//cough
							else if (sim1 == "throat irritate" || sim1 == "lung irritate" || sim1 =="dry cough" || sim1 =="air passage irritate" || sim1 =="wet cough" )
							{
							
								if(sim2 == "throat irritate" || sim2 == "lung irritate" || sim2 =="dry cough" || sim2 =="air passage irritate" || sim2 =="wet cough" )	{
								
									if(sim3 == "throat irritate" || sim3 == "lung irritate" || sim3 =="dry cough" || sim3 =="air passage irritate" || sim3 =="wet cough")	{
									
										text = "Your disease is Cough";
										var txt = "here";
										
										text = "Your disease is Cough"+ "<br>"+ "Click " + txt.link("cough.php") + " to get the suggestion treatment.";  
									}
									
									else{ text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
								
								}
								
								else{text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
							
							}
							
							//crtical cough
							else if (sim1 == "cough day and night" || sim1 == "shortness of breath" || sim1 =="temperature above 37.5c" || sim1 =="breathing painful" )
							{
							
								if(sim2 == "cough day and night" || sim2 == "shortness of breath" || sim2 =="temperature above 37.5c" || sim2 =="breathing painful" )	{
								
									if(sim3 == "cough day and night" || sim3 == "shortness of breath" || sim3 =="temperature above 37.5c" || sim3 =="breathing painful")	{
									
										text = "Your disease is Critical Cough";
										var txt = "here";
										
										text = "Your disease is Critical Cough." +"<br> Please see the doctor as soon as possible!";  
									}
									
									else{ text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
								
								}
								
								else{text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
							
							}
							
							
							
							//food poisoning
							else if (sim1 == "watery or bloody diarrhea" || sim1 == "nausea" || sim1 =="vomiting" || sim1 =="pain abdomen" || sim1 =="cramp abdomen" || sim1 =="fever")
							{
							
								if(sim2 == "watery or bloody diarrheat" || sim2 == "nausea" || sim2 =="vomiting" || sim2 =="pain abdomen" || sim2 =="cramp abdomen" || sim2 =="fever")	{
								
									if(sim3 == "watery or bloody diarrhea" || sim3 == "nausea" || sim3 =="vomiting" || sim3 =="pain abdomen" || sim3 =="cramp abdomen" || sim3 =="fever" )	{
									
										text = "Your disease is Food Poisoning";
										var txt = "here";
										
										text = "Your disease is Food Poisoning." + "<br>"+ "Click " + txt.link("food.php") + " to get the suggestion treatment.";  
									}
									
									else{ text = "Please input again again";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
								
								}
								
								else{text = "Please input again";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
							
							}
							
							
							
							//critical food poisoning
							else if (sim1 == "frequent vomit" || sim1 == "blood in vomit" || sim1 =="temperature above 38.0c" || sim1 =="dry mouth" || sim1 =="blurry vision" || sim1 =="blood in stool" )
							{
							
								if(sim2 == "frequent vomit" || sim2 == "blood in vomit" || sim2 =="temperature above 38.0c" || sim2 =="dry mouth" || sim2 =="blurry vision" || sim2 =="blood in stool" )	{
								
									if(sim3 == "frequent vomit" || sim3 == "blood in vomit" || sim3 =="temperature above 38.0c" || sim3 =="dry mouth" || sim3 =="blurry vision" || sim3 =="blood in stool"  )	{
									
										text = "Your disease is Critical Food Poisoning";
										var txt = "here";
										
										text = "Your disease is Critical Food Poisoning." +"<br> Please see the doctor as soon as possible!";  
									}
									
									else{ text = "Please input again";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
								
								}
								
								else{text = "Please input again";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
							
							}
							
							//asthma
							else if (sim1 == "cough at night" || sim1 == "wheezing" || sim1 =="chest pain" || sim1 =="chest pressure" || sim1 =="shortness of breath" || sim1 =="chest congestion")
							{
							
								if(sim2 == "cough at night" || sim2 == "wheezing" || sim2 =="chest pain" || sim2 =="chest pressure" || sim2 =="shortness of breath" || sim2 =="chest congestion")	{
								
									if(sim3 == "cough at night" || sim3 == "wheezing" || sim3 =="chest pain" || sim3 =="chest pressure" || sim3 =="shortness of breath" || sim3 =="chest congestion" )	{
									
										text = "Your disease is Food Poisoning";
										var txt = "here";
										
										text = "Your disease is Asthma." + "<br>"+ "Click " + txt.link("asthma.php") + " to get the suggestion treatment.";  
									}
									
									else{ text = "Please input again again";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
								
								}
								
								else{text = "Please input again";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';}
							
							}
							
							
							
							
							
							
							
						// If the letter is anything else
						 else {
							text = "Please input";
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';
							
						}
						document.getElementById("demo").innerHTML = text;
					}
					
					
					
					
					function clearFunc()
					{
					
					
							sim1 = document.getElementById("sym1").value  = '';
							sim2 = document.getElementById("sym2").value  = '';
							sim3 = document.getElementById("sym3").value  = '';
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
    url:"fetch.php",
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

<script>
$(document).ready(function(){
 $('#sym2').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"fetch.php",
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

<script>
$(document).ready(function(){
 $('#sym3').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"fetch.php",
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
