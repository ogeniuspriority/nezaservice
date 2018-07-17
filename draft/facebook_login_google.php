<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="../jquery/jquery.js" type="text/javascript"></script>
<meta name="google-signin-client_id" content="808431171525-nm6cln9do658ebqogs1clp9qivpan11i.apps.googleusercontent.com">

<div  id="cyuma" class="g-signin2" style="background: green;border-radius:5px;;border: 2px solid green;width: 200px" data-onsuccess="onSignIn"></div>

<input  class="g-signin2" data-onsuccess="onSignIn" type="button" value="btn 2" id="trend" />
<img src="" id="myImage" style="width: 200px;height: 200px" />

<script type="text/javascript">
	$('#trend').click(function() {
		$('#cyuma').click();
	})
	function onSignIn(googleUser) {
		var profile = googleUser.getBasicProfile();
		console.log('ID: ' + profile.getId());
		// Do not send to your backend! Use an ID token instead.
		console.log('Name: ' + profile.getName());
		console.log('Image URL: ' + profile.getImageUrl());
		console.log('Email: ' + profile.getEmail());
		document.getElementById("myImage").src = profile.getImageUrl();
		// This is null if the 'email' scope is not present.
		//alert(profile.getId());
	}

	function onLoadGoogleCallback() {
		gapi.load('auth2', function() {
			auth2 = gapi.auth2.init({
				client_id : '808431171525-nm6cln9do658ebqogs1clp9qivpan11i.apps.googleusercontent.com',
				cookiepolicy : 'single_host_origin',
				scope : 'profile'
			});

			auth2.attachClickHandler(element, {}, function(googleUser) {
				console.log('Signed in: ' + googleUser.getBasicProfile().getName());
				alert(googleUser.getBasicProfile().getName());
			}, function(error) {
				console.log('Sign-in error', error);
			});
		});

		element = document.getElementById('googleSignIn');
	}
</script>