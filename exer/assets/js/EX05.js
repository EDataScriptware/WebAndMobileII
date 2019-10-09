/*
Edward Riley
3/03/2019
ISTE240 Exercise 5 – JavaScript Part 1
*/

// This will change the style of the text
function jsStyle() {
	const para = document.getElementById("para");
	para.style.color = "#FF0000";
	para.style.fontSize = "20px";
    para.style.fontFamily = "Arial";
}

// This will get the value of first and last name and send it to the 'alert' message
function getFormValues() {
    const fName = document.getElementById("fname").value;
    const lName = document.getElementById("lname").value;
    alert( fName + " " + lName );
}

// This will allow me to show the number of choices from the select list to the alert message.
function getOptions() {
	// function to display the number of options in an alert()
    const selectList = document.getElementById("mySelect");
	alert( selectList.length );

}

// The text will change whenever I highlgiht my own mouse over the text
function mouseOverRed() {
	const text = document.getElementById("rb");
	text.style.color =  "red";
}

// The text will change whenever my mouse is no longer highlighting the text
function mouseOverBlack() {
    const text = document.getElementById("rb");
	text.style.color = "black";
}

// Division
function divide()
	{
		var first = document.getElementById("firstoperand").value;
		var second = document.getElementById("secondoperand").value;
		var result = first / second;
		document.getElementById("result").innerHTML= result;
	}
    
//Multiolication
function multiply()
	{
		var first = document.getElementById("firstoperand").value;
		var second = document.getElementById("secondoperand").value;
		var result = first * second;
		document.getElementById("result").innerHTML= result;
	}