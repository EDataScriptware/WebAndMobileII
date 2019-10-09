<!DOCTYPE html>
<!-- AUTHOR: Edward Riley  -->
<!-- DATE: 2/18/2018  -->
<!-- DESCRIPTION: Create a website for a project-->

<html>
<head>
<!-- Five JavaScript Exercises -->
<meta charset=utf-8 />
<title>JavaScript Exercises</title>
<script src="assets/js/EX05.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/EX05.css"/>

</head> 
<body>
	<div>
        <!-- Part One -->
		<h2>JavaScript Exercise 5a </h2> 
		<p id="para">This style of this paragraph will change when you click the button below.</p>
	</div>
	<div>
		<button id="styleMe" onclick="jsStyle()">Change Style</button>
	</div>
    
    <hr/>
    <!-- Part Two -->
    <h2>JavaScript Exercise 5b </h2> 
	<form id="regForm">
		First name: <input type="text" id="fname" value="Edward"><br>
		Last name: <input type="text" id="lname" value="Riley"><br>
		<input type="button" onclick="getFormValues();" value="Submit">
	</form>
    
    <hr/>
    <!-- Part Three -->
    <h2>JavaScript Exercise 5c</h2> 
<form>
	<select id="mySelect">
		<option>Red</option>
		<option>Green</option>
		<option>Blue</option>
		<option>Yellow</option>
		<option>Orange</option>
		<option>Purple</option>
	</select>
	<input type="button" onclick="getOptions()" value="Display the Options">
</form>
    
    <hr/>
    
        <!-- Part Four-->
    <div>
		<h2>JavaScript Exercise 5d </h2> 
	</div>
	<div>
        <p id="rb" onmouseover="mouseOverRed()" onmouseout="mouseOverBlack()">This sentence will turn red when you mouseover it.</p>
	</div>
    
    <hr/>
    
        <!-- Part Five -->
    <div>
		<h2>JavaScript Exercise 5e </h2> 
	</div>
	<form>
		<input type="text" id="firstoperand" placeholder="First Operand"/><br>
		<input type="text" id="secondoperand" placeholder="Second Operand"/><br>
		<input type="button" onclick="divide()" value="Divide" />
		<input type="button" onclick="multiply()" value="Multiply" />
		<p>The answer: <span id="result"></span></p>
	</form>
    
    <hr/>
      
</body>
</html>