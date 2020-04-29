<!DOCTYPE html>
<html>

<SCRIPT LANGUAGE="JavaScript">
	function addDashes(f){
		if(f.value != ""){
			if(f.value.slice(3,4) == "-")
			{
				f.value = f.value.slice(0,3) + f.value.slice(4)
			}

			if(f.value.slice(6,7) == "-")
			{
				f.value = f.value.slice(0,6) + f.value.slice(7)
			}
		}
	}
</SCRIPT>

<style>

.head{
	text-align: center;
	font-weight: bold;
	font-family: Comic Sans MS,Arial, Helvetica, sans-serif;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=tel], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<script type="text/javascript">
	function validateForm() {
   var x = document.forms["myForm"]["fname"].value;
   if ( x == null || x == "" ) {
      alert("First name must be filled out");
      return false;
   }
}
</script>

<head>
	<title></title>
</head>
<body>
	<p class="head">Welcome to the Queue:</p>

<div>
	<form action="contactform.php" onsubmit="return validateForm()" method="GET">
	  <label for="fname">First name:</label><br>
	  <input type="text" id="fname" name="fname"><br>
	  <label for="lname">Last name:</label><br>
	  <input type="text" id="lname" name="lname"><br>
	  <label for="number">Phone Number:</label><br>
	  <input type="text" id="number" name="number" onBlur='addDashes(this)'><br>
	  <label for="email">Email</label><br>
	  <input type="text" id="email" name="email"><br><br>
	  <input type="submit" value="Submit">
	</form>
</div>

</body>
</html>