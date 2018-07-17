<script type="text/javascript">
	(function() {
		var po = document.createElement('script');
		po.type = 'text/javascript';
		po.async = true;
		po.src = 'https://plus.google.com/js/client:plusone.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(po, s);
	})(); 
</script>
<!-- Bootstrap core CSS -->
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<div class="container">

	<form class="form-signin" role="form">
		<div id="status"></div>
		<h2 class="form-signin-heading">User Registration</h2>

		<label for="inputFname" class="sr-only">First Name</label>
		<input type="text" id="inputFullname" class="form-control" placeholder="First Name" required autofocus>

		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >

		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

		<div class="row">
			<div class="col-md-6">
				<button class="btn btn-sm btn-primary btn-block" type="submit">
					Sign Up
				</button>
			</div>
			<div class="col-md-6">
				<button class="g-signin "
				data-scope="https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"
				data-requestvisibleactions="http://schemas.google.com/AddActivity"
				data-clientId="808431171525-nm6cln9do658ebqogs1clp9qivpan11i.apps.googleusercontent.com"
				data-accesstype="offline"
				data-callback="mycoddeSignIn"
				data-theme="dark"
				data-cookiepolicy="single_host_origin"></button>
			</div>
		</div>

	</form>

</div>
<!-- /container -->
<script type="text/javascript">
	var gpclass = (function() {

		//Defining Class Variables here
		var response = undefined;
		return {
			//Class functions / Objects

			mycoddeSignIn : function(response) {
				// The user is signed in
				if (response['access_token']) {

					//Get User Info from Google Plus API
					gapi.client.load('plus', 'v1', this.getUserInformation);

				} else if (response['error']) {
					// There was an error, which means the user is not signed in.
					//alert('There was an error: ' + authResult['error']);
				}
			},

			getUserInformation : function() {
				var request = gapi.client.plus.people.get({
					'userId' : 'me'
				});
				request.execute(function(profile) {
					var email = profile['emails'].filter(function(v) {
					return v.type === 'account'; // Filter out the primary email
					})[0].value;
					var fName = profile.displayName;
					$("#inputFullname").val(fName);
					$("#inputEmail").val(email);
				});
			}
		};
		//End of Return
	})();

	function mycoddeSignIn(gpSignInResponse) {
		gpclass.mycoddeSignIn(gpSignInResponse);
	}
</script>