
<?php
 require 'db_connect.php';
 if(isset($_POST['submit'])){
	if(isset($_POST['fname']) && isset($_POST['lname'])){
		    echo "wazi";

		$fname=$_POST['fname'];
	    $lname=$_POST['lname'];
	        $obj=new Connect;
			
			if($obj->Insert($fname,$lname)){
			  echo "Successiful Insert";
			}
			pg_close();
	}
  }
?>
<!DOCTYPE HTML>
<html>
    <head>
       <meta charset="UTF-8"></meta>
       <title>Insert</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
      <div class="div">
    	<form method="post" action="form.php">
    	 <div class="form-group">
    	  <label for="usr">FName:</label>
    	  <input type="text" class="form-control" name="fname">
    	</div>
    	<div class="form-group">
    	  <label for="pwd">LName:</label>
    	  <input type="text" class="form-control" name="lname">
    	</div>
        <input type="submit" class="btn btn-default" name="submit"/>
       </form>
    </body>
   </div>
</html>
