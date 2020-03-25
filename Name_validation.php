
<!DOCTYPE html>
<html>
<head>
	<title>JavaScript</title>
</head>
<body>

	<div>
		<h2>Name_Validation</h2>
	</div>


	<form>
		<input id="name" type="text" name="" value="" onblur="Name()" /><br> <p id="msg"></p>
		<input type="button" name="btn" value="Click" onclick="Name()">

	</form>
	</form>

	<script>
		"use strict"

		function Name(){
			var name = document.getElementById('name').value;
			document.getElementById('msg').innerHTML = name;
			  if (Name.value == "")                                  
    				{ 
				        window.alert("Please enter your name."); 
				        Name.focus(); 
				        return false; 
    				} 
    			else
    			{

    			}
		}
	</script>
</body>
</html>