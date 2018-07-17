<html>
	<head>
		<title>Google+ Sign-in button demo: rendering with JavaScript</title>
		<style type="text/css">
			html, body {
				margin: 0;
				padding: 0;
			}
			#signin-button {
				padding: 5px;
			}
			#oauth2-results pre {
				margin: 0;
				padding: 0;
				width: 600px;
			}
			.hide {
				display: none;
			}
			.show {
				display: block;
			}
		</style>

		<script src="https://apis.google.com/js/client:platform.js" type="text/javascript"></script>
		<script type="text/javascript">
			var loginFinished = function(authResult) {
				if (authResult) {
					console.log(authResult);
				}

				gapi.client.load('oauth2', 'v2', function() {
					gapi.client.oauth2.userinfo.get().execute(function(resp) {
						// Shows user email

						console.log('ID: ' + resp.id);
						console.log('Display Name: ' + resp.name);
						//console.log('Image URL: ' + resp.image.url);
						//-----------
						var request = gapi.client.plus.people.get({
							'userId' : 'me'
						});

						request.execute(function(resp) {
							console.log('ID: ' + resp.id);
							console.log('Display Name: ' + resp.displayName);
							console.log('Image URL: ' + resp.image.url);
							console.log('Profile URL: ' + resp.url);
						});

					});
				});
				//-------

			};

			var options = {
				'callback' : loginFinished,
				'approvalprompt' : 'force',
				'clientid' : '808431171525-nm6cln9do658ebqogs1clp9qivpan11i.apps.googleusercontent.com',
				'scope' : 'https://www.googleapis.com/auth/plus.login',
				'requestvisibleactions' : 'http://schemas.google.com/CommentActivity http://schemas.google.com/ReviewActivity',
				'cookiepolicy' : 'single_host_origin'
			};

			var renderBtn = function() {
				gapi.signin.render('renderMe', options);
			}
		</script>

	</head>
	<body onload ="renderBtn()">
		<div id="renderMe"></div>
	</body>
</html>