<?php

require_once 'server_includes/header.php';
?>
<body>
	<table style="margin-left: 40%;">
		<tr>
			<td>
			<input class="username" type="text" placeholder="Username" />
			</td>
		</tr>
		<tr>
			<td>
			<input class="password" type="text" placeholder="Password" />
			</td>
		</tr>
		<tr>
			<td style="text-align: center"><label>Activity Level:</label></td>
			<td>
			<select class="account_type">
				<option>Administrators</option>
				<option>Data managers</option>
				<option>Data Entry Specialists</option>
				<option>Activities Monitoring Expert</option>
				<option>Statistics and Reports Expert</option>				
				<option>Simple user</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>
			<input class="password" type="button" value="LOGIN" />
			</td>
			<td>
			<input class="password" type="button" value="Register as a simple user" />
			</td>
		</tr>
	</table>

</body>
