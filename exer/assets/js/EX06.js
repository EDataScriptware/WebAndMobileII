/* 6a Moving the text by 10px **/        
var selectedText = 0;

	function moveText()
{
        "use strict";
		var text = document.getElementById('movingText');
		selectedText += 10
		text.style.marginLeft = selectedText + 'px';
}

/* 6b Counting the inputs **/
function howMany()
{
	var inputElements = document.getElementById('regForm').getElementsByTagName('input');
	var inputCount = inputElements.length;
	var countingText = 0;

	for(var i =0; i < inputCount; i++){
		if(inputElements[i].type === "text"){
			countingText = countingText + 1;
		}
	}
	alert("Number of total inputs: " + inputCount + "\nNumber of inputs of type 'text': " + countingText);


}

/* 6c Changing the Color of Background */
var color;

function colorChange() 
{
let selections = document.getElementById('colorSelect');
let options = selections.getElementsByTagName('option');
let optionsCount = options.length;


	for(var i = 0; i < optionsCount; i++){
		if(options[i].selected === true){
			color = (options[i].innerHTML);
			document.getElementById('colorForm').style.backgroundColor = color;
		}
	}
}

/* 6d Changing the Color of the text on Hover by using color from Exercise 6c*/
function hoverChange()
{
    document.getElementById('colorText').style.color = color;
}


/* 6e Changing out and adding the text node to the .php */
function multiply() 
{
	var x = parseInt(document.getElementById("firstoperand").value);
	var y = parseInt(document.getElementById("secondoperand").value);
	var product = x*y;
	var textNode = document.createTextNode(product);
	document.getElementById("result").innerHTML= "";
	document.getElementById("result").appendChild(textNode);
}


function divide() 
{
	var x = parseInt(document.getElementById("firstoperand").value);
	var y = parseInt(document.getElementById("secondoperand").value);
	var division = x/y;
	var textNode = document.createTextNode(division);
	document.getElementById("result").innerHTML= "";
	document.getElementById("result").appendChild(textNode);
}