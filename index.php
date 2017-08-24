<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
</head>

	
<body >
	<!-- Header Section Starts -->
 <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Register <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>

      
   <!-- Navigation bar ends -->
 
 <div class="container">

	 <div class="row form-horizontal col-md-7 col-md-offset-2" style="margin-top:8px">
			<form method="POST"  role="form" >
       	<input type="text" class="form-control" name="word" id="word" placeholder="Word" required />
          <input type="text" class="form-control" name="meaning" id="meaning"  placeholder="Meaning" required /> 
           <input type="text" class="form-control" name="sentence" id="sentence"  placeholder="Sentence" /> 
	  <?php
	        if(isset($_POST["word"]) ){
			       
		         $word= $_POST["word"];
                 $meaning= $_POST["meaning"];
                 $sentence= $_POST["sentence"];
		         $date = date('Y-m-d H:i:s');
							
			     include("dbConnect.php");
			    
       			 $query= "insert into words(word,meaning,submission_date,example_usage) values ('$word','$meaning','$date','$sentence')";
                 $result = mysqli_query($conn,$query);
        	
               }	
	?>
				 <button class="btn btn-primary" style="margin-top:14px;margin-left:45%;width:90px" >Send</button>
	 		</form> 
	</div>
    </div>
</body>
</html>