<!DOCTYPE html>
<html>
	<head>
		<title>Gmail API Quickstart</title>
		<meta charset='utf-8' />
	</head>
	<body>
		<p>
			Gmail API Quickstart
		</p>

		<!--Add buttons to initiate auth sequence and sign out-->
		<button id="authorize-button" style="display: none;">
			Authorize
		</button>
		<button id="signout-button" style="display: none;">
			Sign Out
		</button>
		<pre id="content"></pre>
		<script src="../jquery/jquery.js" type="text/javascript"></script>

		<script type="text/javascript">
			// Client ID and API key from the Developer Console
			var CLIENT_ID = '808431171525-nm6cln9do658ebqogs1clp9qivpan11i.apps.googleusercontent.com';

			// Array of API discovery doc URLs for APIs used by the quickstart
			var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest"];

			// Authorization scopes required by the API; multiple scopes can be
			// included, separated by spaces.
			var SCOPES = 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email';

			var authorizeButton = document.getElementById('authorize-button');
			var signoutButton = document.getElementById('signout-button');

			/**
			 *  On load, called to load the auth2 library and API client library.
			 */
			function handleClientLoad() {
				gapi.load('client:auth2', initClient);
			}

			/**
			 *  Initializes the API client library and sets up sign-in state
			 *  listeners.
			 */
			var auth2;
			function initClient() {
				auth2 = gapi.auth2.init({
					discoveryDocs : DISCOVERY_DOCS,
					clientId : CLIENT_ID,
					scope : 'profile',
					cookiepolicy : 'single_host_origin'
				}).then(function() {
					// Listen for sign-in state changes.
					gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

					// Handle the initial sign-in state.
					updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
					authorizeButton.onclick = handleAuthClick;
					signoutButton.onclick = handleSignoutClick;
					//---

					//--
				}, function() {
					alert("Not possible!");
				});

			}

			/**
			 *  Called when the signed in status changes, to update the UI
			 *  appropriately. After a sign-in, the API is called.
			 */
			function updateSigninStatus(isSignedIn) {
				if (isSignedIn) {
					authorizeButton.style.display = 'none';
					signoutButton.style.display = 'block';
					listLabels();
					alert(isSignedIn)

					//------------

					//---------
				} else {
					authorizeButton.style.display = 'block';
					signoutButton.style.display = 'none';
				}
			}

			/**
			 *  Sign in the user upon button click.
			 */

			function handleAuthClick(event) {
				gapi.auth2.getAuthInstance().signIn();
			}

			/**
			 *  Sign out the user upon button click.
			 */
			function handleSignoutClick(event) {
				gapi.auth2.getAuthInstance().signOut();
			}

			/**
			 * Append a pre element to the body containing the given message
			 * as its text node. Used to display the results of the API call.
			 *
			 * @param {string} message Text to be placed in pre element.
			 */
			function appendPre(message) {
				var pre = document.getElementById('content');
				var textContent = document.createTextNode(message + '\n');
				pre.appendChild(textContent);
			}

			/**
			 * Print all Labels in the authorized user's inbox. If no labels
			 * are found an appropriate message is printed.
			 */
			function listLabels() {
				if (isSignedIn) {
					var profile = auth2.currentUser.getBasicProfile();
					console.log('ID: ' + profile.getId());
					console.log('Full Name: ' + profile.getName());
					console.log('Given Name: ' + profile.getGivenName());
					console.log('Family Name: ' + profile.getFamilyName());
					console.log('Image URL: ' + profile.getImageUrl());
					console.log('Email: ' + profile.getEmail());
				}
			}

		</script>

		<script async defer src="https://apis.google.com/js/api.js"
		onload="this.onload=function(){};handleClientLoad()"
		onreadystatechange="if (this.readyState === 'complete') this.onload()"></script>
	</body>
</html>