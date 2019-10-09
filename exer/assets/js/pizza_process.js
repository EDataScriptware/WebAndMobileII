/* 2019 JavaScript for Pizza Ordering Form */
function validCustomerID()  {
"use strict";
var validID = true;
var id = "";

if (document.getElementById("customerID").value === '') {
	document.getElementById("errorID").innerHTML = "Empty";
	document.getElementById("errorID").style.color = "red";
	validID = false;
	return (validID);
}

id = document.getElementById("customerID").value;
document.getElementById("errorID").innerHTML = "";

console.log("In validCustomerID  User Entered the ID ->"+id+"<-");

if (isNaN(id)) // if is not a number
  {
	  document.getElementById("customerID").style.borderColor="red";
	  document.getElementById("customerID").style.backgroundColor = 'pink';
	  document.getElementById("errorID").innerHTML = "Not a Number";
	  document.getElementById("errorID").style.color = 'red';
	  validID = false;
  }
else
  {
	  validID = true;
	  document.getElementById("customerID").style = null;
	  document.getElementById("errorID").innerHTML = "";
	  document.getElementById("errorID").style.color = null;

  }


console.log("End of testing customerID     validID  = "+validID);
return (validID);
}


function validateForm(){
"use strict";
var validName = true;
console.log("In JavaScript to check for name");

   if(document.getElementById("customer").value === ''){
	  document.getElementById("customer").style.borderColor="red";
	  document.getElementById("customer").style.backgroundColor = 'pink';
	  validName=false;
	 }
   else
       {
       document.getElementById("customer").style = null;
       validName = true;
       }

  var checkCustomerID = validCustomerID();
  console.log("END of function   checkCustomerID  is "+validName);
  console.log("END of function         validName  is "+validName);
  return (validName && checkCustomerID);
}