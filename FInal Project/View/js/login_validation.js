function validate(pForm) {
	let isValid = "";

	if (pForm.uname.value === "") {
		document.getElementById("unameErr").innerHTML = "Please fill up the username.";
		isValid = "Not Valid";
	}
	if (pForm.password.value === "") {
		document.getElementById("passErr").innerHTML = "Please fill up the password";
		isValid = "Not Valid";
	}

	if (isValid === "") {
		return true;
	}
	else {
		return false;
	}
}