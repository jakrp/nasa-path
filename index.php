<!DOCTYPE html>
<html>
<head>
<title>Mars Rover Challenge</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<script src="script.js"></script>
</head>
<body>
<div id="mainform">
<div class="innerdiv">
<h2>Mars Rover Challenge</h2>
<!-- Required Div Starts Here -->
<form id="form" name="form">
<h3>Fill the form below</h3>
<div class="form-group">
      <label for="X-Coordinate">Fill the X-Coordinate</label>
      <input type="text" class="form-control" id="x" placeholder="Enter X-Coordinate" name="x">
    </div>
	<div class="form-group">
      <label for="Y-Coordinate">Fill the Y-Coordinate</label>
      <input type="text" class="form-control" id="y" placeholder="Enter Y-Coordinate" name="y">
    </div>
    <div class="checkbox">
	  <label for="Direction">Choose the Direction</label>
      <select class="form-control" id="dir" placeholder="Enter Direction" name="dir">
	  <option value="N">N</option>
	  <option value="E">E</option>
	  <option value="W">W</option>
	  <option value="S">S</option>
	</select>
    </div>
	<BR><BR>
	<div class="form-group">
      <label for="String">String</label>
      <input type="text" class="form-control" id="str" placeholder="Enter String" name="str">
    </div>
	<br><br>&nbsp;&nbsp;&nbsp;&nbsp;
    <input id="submit" onclick="myFunction()" type="button" value="Calculte Result">
</form>
<div id="clear"></div>
</div>
<div id="clear"></div>
</div>
</body>
</html>