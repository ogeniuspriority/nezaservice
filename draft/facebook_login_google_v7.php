
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
		<script src="https://apis.google.com/js/api:client.js"></script>
		<script>
			var googleUser = {};
			var startApp = function() {
				gapi.load('auth2', function() {
					// Retrieve the singleton for the GoogleAuth library and set up the client.
					auth2 = gapi.auth2.init({
						client_id : '808431171525-nm6cln9do658ebqogs1clp9qivpan11i.apps.googleusercontent.com',
						cookiepolicy : 'single_host_origin',
						// Request scopes in addition to 'profile' and 'email'
						//scope: 'additional_scope'
					});
					attachSignin(document.getElementById('customBtn'));
				});
			};

			function attachSignin(element) {
				//console.log(element.id);
				auth2.attachClickHandler(element, {}, function(googleUser) {
					document.getElementById('name').innerText = "Signed in: "+element.id+"-" + googleUser.getBasicProfile().getName() + "--" + googleUser.getBasicProfile().getEmail();
				document.getElementById("myImage").src= googleUser.getBasicProfile().getImageUrl();
				}, function(error) {
					//alert(JSON.stringify(error, undefined, 2));
				});
			}
		</script>
		<style type="text/css">
			#customBtn {
				cursor:hand;width: 240px;height:40px;background: #d62d20;border-radius: 7px;color: white;
			}
			#customBtn:hover {
				cursor: pointer;
			}
			span.label {
				font-family: serif;
				font-weight: normal;
			}
			span.icon {
				background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
				display: inline-block;
				vertical-align: middle;
				width: 42px;
				height: 42px;
			}
			span.buttonText {
				display: inline-block;
				vertical-align: middle;
				padding-left: 42px;
				padding-right: 42px;
				font-size: 14px;
				font-weight: bold;
				/* Use the Roboto font that is loaded in the <head> */
				font-family: 'Roboto', sans-serif;
			}
		</style>

		<!-- In the callback, you would hide the gSignInWrapper element on a
		successful sign in -->
		<div id="gSignInWrapper">
			<span class="label"></span>
			<div id="customBtn" class="customGPlusSignIn">
				<img src="../images/Google plus round.png" style="margin:5px;width: 30px;height: 30px;" />
				<div style="margin-top: -30px;margin-left: 50px;">
				    Sign in with Gmail
				</div>
			</div>
		</div>
		<img src="" id="myImage" style="width: 200px;height: 200px" />
		<div id="name"></div>
		<script>
			startApp();
		</script>
	