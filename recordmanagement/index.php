<!DOCTYPE html>
<html>
<head>
	<title>Records Management System</title>
	
	<style>
		body, html {
			height: 100%;
			margin: 0;
			padding: 0;
			background: linear-gradient(to bottom right, #ffffff 0%, #000099 100%);
		}
		#main_table {
		height: 100%;
		width: 80%;
    }
    #welcome_container {
	font-family: 'Open Sans Light', 'Helvetica Neue', Helvetica, arial, sans-serif;
	font-size: 360%;
	color: #000000;
	display: inline-block;
	text-align: left;
}
		#main_table b {
-webkit-text-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 3px 10px rgba(0, 0, 0, 0.3);
text-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 3px 10px rgba(0, 0, 0, 0.3);
}
</style>
<link rel='stylesheet' href='css/style.css'>
</head>
<body>
	<table id='main_table' >
		<tr>
			<td  width='60%' align='center'>
				<div id=welcome_container>
				Records<br> Management<br> Information<br> System<br> <b style='color:#0000ff;'></b>
				</div>
			</td>
			<td  width='40%'>
				<div id='login_container'>
					<section class='container'>
				<div class='login'>
				<h1>Staff Login</h1>
				<form method='POST' action='index.php' >
					<p><input type='text' required name='user'  placeholder='Username' autofocus=''></p>
					<p><input type='password' required name='pass' placeholder='Password' ></p>
					<p class='remember_me'>
					</p>
					<p class='submit'><input type='submit' name='fire' value='submit'></p>
					</form>
                    </div>
                    <div class='login-help'>
					Don't Have An Account ?<br> 
					<form action='register.php' method='GET' id='reg'>
                    <button class='Submit1' type='submit' form='reg' value='Submit'>Register</button>
                    </form>
					</div>
					</form>
					</section>

				</div>
			</td>
		</tr>
	</table>
</body>
</html>
