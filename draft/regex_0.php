<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/xml; charset=utf-8" />
		<title>regularExpressions.html</title>
		<script type="text/javascript">
			function validate() {
				//get inputs
				name = document.getElementById("txtName").value;
				email = document.getElementById("txtEmail").value;
				phone = document.getElementById("txtPhone").value;

				//create an empty error message
				errors = "";
				//check name-It simply needs to exist
				if (name == "") {
					errors += " please supply a name \n";
				}//end if
				//check email
				emailRE = /^.+@.+\..{2,4}$/;
				if (email.match(emailRE)) {
					//console.log("email match");
					//do nothing
				} else {
					//console.log("email not a match");
					errors += "Please check email address \n";
				}//end if
				//check phone number
				phoneRE = /^\(\d{3}\)*\d{3}-\d{4}$/;

				if (phone.match(phoneRE)) {
					//console.log("phone matches");
					//do thing
				} else {
					//console.log("phone problem");
					errors += "Please check phone #\n";
				}//end phone if
				//check for errors
				if (errors == "") {
					alert("now processing data");
					//process the form
				} else {
					alert(errors);
				}//end if
			}//end function
		</script>

	</head>
	<body>
		<h1>Validation with Regular Expressions</h1>
		<form action="">
			<fieldset>
				<label>Name</label>
				<input type="text"
				id="txtName" />

				<label>Email</label>
				<input type="text"
				id="txtEmail" />

				<label>Phone Number</label>
				<input type="text"
				id="txtPhone" />

				<button type="button"
				оnclick="validate()">
					Submit
				</button>
			</fieldset>
		</form>
		<div>
			<script type="text/javascript">
				function censorName() {
					document.adminForm.username.value = document.adminForm.username.value.replace(/^[\s]+|[\s]+$/g, '');
					document.adminForm.username.value = document.adminForm.username.value.replace(/[^0-9a-zA-Z_\-]+/g, '-');
					document.adminForm.username.value = document.adminForm.username.value.replace(/\-+/g, '-');
					document.adminForm.username.value = document.adminForm.username.value.replace(/^\-+|\-+$/g, '');
					if (document.adminForm.username.value.length > 2)
						return true;
					else
						return false;

				}

			</script>
		</div>
	</body>
</html>