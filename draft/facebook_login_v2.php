<!--<div id="status"></div>-->
<!--<div id="lgnbtn">
	<button onclick="login()" id="login">
		Login with Facebook
	</button>
</div>
<button onclick="getInfo()" id="getInfo">
	Get Info
</button>-->
<script type="text/javascript">
	// initialize and setup facebook js sdk
	window.fbAsyncInit = function() {
		FB.init({
			appId : '247465659059524',
			xfbml : true,
			version : 'v2.8'
		});

	};
	( function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));

	// login with facebook with extra permissions
	function login() {
		//----------------
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				//document.getElementById('status').innerHTML = 'We are connected.';
				//document.getElementById('login').style.visibility = 'hidden';
			} else if (response.status === 'not_authorized') {
				//document.getElementById('status').innerHTML = 'We are not logged in.'
			} else {
				//document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
			}
		});

		//---
		FB.login(function(response) {
			if (response.status === 'connected') {
				//document.getElementById('status').innerHTML = 'We are connected.';
				//document.getElementById('login').style.visibility = 'hidden';
				//---confirm good login--
				window.setTimeout(function(){
				    getInfo();
				},1000);				
				//--
			} else if (response.status === 'not_authorized') {
				//document.getElementById('status').innerHTML = 'We are not logged in.'
			} else {
				//document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
			}
		}, {
			scope : 'email'
		});
	}

	// getting basic user info
	function getInfo() {
		FB.api('/me', 'GET', {
			fields : 'first_name,last_name,name,gender,id,age_range,email,picture.width(150).height(150)'
		}, function(response) {
			//document.getElementById('status').innerHTML = "<img src='" + response.picture.data.url + "'>";
			alert(response.first_name + "-" + response.name + "-" + response.gender + "-" + response.email + "-" + response.age_range["min"] + "-" + response.age_range["max"] + "-" + response.id);
		});

	}
</script>