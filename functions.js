/*
Strip whitespace from the beginning and end of a string
Input : a string
*/
function trim(str)
{
	return str.replace(/^\s+|\s+$/g,'');
}

/*
Make sure that textBox only contain number
*/
function checkNumber(textBox)
{
	while (textBox.value.length > 0 && isNaN(textBox.value)) {
		textBox.value = textBox.value.substring(0, textBox.value.length - 1)
	}
	
	textBox.value = trim(textBox.value);

}

/*
	Check if a form element is empty.
*/
function isEmpty(formElement, message) {
	formElement.value = trim(formElement.value);
	
	_isEmpty = false;
	if (formElement.value == '') {
		_isEmpty = true;
		alert(message);
		formElement.focus();
	}
	
	return _isEmpty;
}

/*
	Set one value as the selected value
*/
function setSelect(listElement, listValue)
{
	for (i=0; i < listElement.options.length; i++) {
		if (listElement.options[i].value == listValue)	{
			listElement.selectedIndex = i;
		}
	}	
}

function toggle2(showHideDiv, switchTextDiv) {
	var ele = document.getElementById(showHideDiv);
	var text = document.getElementById(switchTextDiv);
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Reply";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "collapse";
	}
}

function toggle3(showHideDiv, switchTextDiv) {
	var ele = document.getElementById(showHideDiv);
	var text = document.getElementById(switchTextDiv);
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "View Comments";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Hide Comments";
	}
}

function goToDetails(rowId)
{
	var formname = "frmPost"+rowId;
	form =  document.getElementById(formname);
	form.submit();
}