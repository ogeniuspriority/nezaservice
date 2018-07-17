<head>
	<meta name="google-signin-client_id" content="808431171525-nm6cln9do658ebqogs1clp9qivpan11i.apps.googleusercontent.com">
</head>
<body>
	<script>
		function onSuccess(googleUser) {
			console.log('onSuccess!');
			var profile = googleUser.getBasicProfile();
			console.log('ID: ' + profile.getId());
			// Do not send to your backend! Use an ID token instead.
			console.log('Name: ' + profile.getName());
			console.log('Image URL: ' + profile.getImageUrl());
			console.log('Email: ' + profile.getEmail());
		}

		function onCustomSuccess(googleUser) {
			console.log('onCustomSignIn!');
		}

		function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			auth2.signOut().then(function() {
				console.log('User signed out.');
			});
		}

		function onLoad() {
			gapi.signin2.render('custom_signin_button', {
				'onsuccess' : onCustomSuccess
			});
		}

		
		function opnr() {
			
		}

	</script>

	<div class="g-signin2" data-onsuccess="onSuccess"></div>
	<div id="custom_signin_button"></div>
	<input  type="button" onclick="opnr()" value="open tis" id="tgr" />
	<a href="#" onclick="signOut();">Sign out</a>

	<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>

</body>
</html>
