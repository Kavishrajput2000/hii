<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style>
		input{color:green}
</style>
</head>
<body>
<form action="hello.php" method="post">
	First Name : <input type="text" name="First Name" placeholder="First Name"><br><br>
	Last Name  : <input type="text" name="Last Name" placeholder="Last Name"><br><br>
	Father Name: <input type="text" name="Father Name" placeholder="Father Name"><br><br>
	D.O.B      : <input type="date" name="date"><br><br>
	Gender     : <input type="radio" name="Gender"> Male
				 <input type="radio" name="Gender"> female
	             <input type="radio" name="Gender"> Other<br><br>
	Mobile number:
	<select>
		<option>+91</option>
		<option>+1</option>
		<option>+60</option>
		<option>+66</option>
		<option>+93</option>
		<option>+81</option>
		<option>+98</option>
		<option>+99</option>
	</select>
	<input type="number" name="Mobile number" placeholder="9999999999" ><br><br>
	Stream     : <input type="checkbox" name="Stream"> Arts
                 <input type="checkbox" name="Stream"> Commerce
                 <input type="checkbox" name="Stream"> Medical
                 <input type="checkbox" name="Stream">	Non-Medical<br><br>
	E-mail ID  : <input type="text" name="E-mail ID" placeholder="Username@gmail.com"><br><br>
	Password   : <input type="Password" name="Password"><br><br>
	<button class="button">submit</button>
	<input  type="reset" value="Reset">
</form>
</body>
</html>