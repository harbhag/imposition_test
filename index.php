<!DOCTYPE html>
<html lang="en">
    <head> 
		

		<script type = "text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type = "text/javascript" src="js/2ics.js"></script>
		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css"
integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">

		<title>Admin</title>
	</head>
	<body>


<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
     <a class="menu"><i class="fa fa-bars" id="menu_icon"></i></a>
      <a class="navbar-brand" href="http://www.2ics.com" target="_blank">2ICS</a>
    </div>
    <div class="collapse navbar-collapse drop_menu" id="content_details">
      <ul class="nav navbar-nav">
        <li><a href=""></span>Reset Form</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>

<div class="container">
	   <h4>User Inputs</h4>
	   
	<form class="form-horizontal" action='' method='post'>
  
  <div class="form-group">
    <label for="flat_width" class="col-sm-2 control-label">Flat Width</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="flat_width" placeholder="Flat Width">
    </div>
  </div>
  
  <div class="form-group">
    <label for="flat_height" class="col-sm-2 control-label">Flat Height</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="flat_height" placeholder="Flat Height">
    </div>
  </div>
  
  <div class="form-group">
    <label for="sheet_width" class="col-sm-2 control-label">Sheet Width</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="sheet_width" placeholder="Sheet Width">
    </div>
  </div>
  
  <div class="form-group">
    <label for="sheet_height" class="col-sm-2 control-label">Sheet Height</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="sheet_height" placeholder="Sheet Height">
    </div>
  </div>
  
  <div class="form-group">
    <label for="grain_way" class="col-sm-2 control-label">Grain Way</label>
    <div class="col-sm-2">
     <select class="form-control" id="grain_way">
	</select>
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-2">
     <input id="calculate_values" class="btn btn-default btn-primary btn-lg btn-block" type="button" value="Calculate Values">
    </div>
  </div>
  

		<!--Calculated Inputs-->
		<br/><br/>
		<h4>Calculated Inputs</h4>
		
  
  <div class="form-group">
    <label for="grain_direction" class="col-sm-2 control-label">Grain Direction</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="grain_direction" placeholder="Grain Direction">
    </div>
  </div>
  
  <div class="form-group">
    <label for="imposition1" class="col-sm-2 control-label">Imposition 1: Grain Width</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="imposition1" placeholder="Imposition 1: Grain Width">
    </div>
  </div>
  
  <div class="form-group">
    <label for="imposition2" class="col-sm-2 control-label">Imposition 2: Grain Height</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="imposition2" placeholder="Imposition 2: Grain Height">
    </div>
  </div>
  
  <div class="form-group">
    <label for="chosen_imposition" class="col-sm-2 control-label">Chosen imposition</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="chosen_imposition" placeholder="Chosen imposition">
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-2">
     <input id="calculate_values" class="btn btn-default btn-primary btn-lg btn-block" type="submit" value="Visualize">
    </div>
  </div>
  
  
</form>



    
  
</div><!--container close-->
	</body>
</html>
