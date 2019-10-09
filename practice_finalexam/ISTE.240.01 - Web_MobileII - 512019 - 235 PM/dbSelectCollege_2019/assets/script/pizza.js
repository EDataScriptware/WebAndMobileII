/* JavaScript for Pizza Ordering Form */
function validateForm(){
	if(document.getElementById("customer").value == ''){
				document.getElementById("customer").style.borderColor="red";
				document.getElementById("customer").style.backgroundColor = 'pink';
				return false;
		}
		return true;
}
/* *************************************
function validateForm() {
    var x = document.forms["OrderForm"]["customerName"].value;
    if (x == null || x == "") {
        document.forms["OrderForm"]["customerName"].style.backgroundColor = 'pink';
        return false;
    }
}
******************************************** */