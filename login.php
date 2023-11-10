<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login Cafeteria</title>

	<link rel="stylesheet" type="text/css" href="css/css1.css">

	<script>
		function toggle_visibility(id) {
			var e = document.getElementById(id);
			if (e.style.display == 'block')
				e.style.display = 'none';
			else
				e.style.display = 'block';
		}
	</script>

</head>

<?php
session_start();
if (isset($_POST['username'])) {
	header('localhost:index.php');
}

?>

<body style=" background:url(images/bgimg.jpg) no-repeat center top; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

	<div id="container">
		<!-- Header -->
		<div id="header">

			<table border="0" cellspacing="10px" width="100%" cellpadding="5px">
				<tr>
					<td width="80%" align="left">
						<font size="12px">P</font><span style="font-size: 18px;">unto <b>D</b>e
							<b>V</b>enta</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:36px">Cafeteria</span>
					</td>
					<td width="10%">&nbsp; </td>
					<!--<td width="10%" align="right"><a href="javascript:void(0)"
							onclick="toggle_visibility('popup-box1')"><input type="button" id="btnadd"
								value="Ingresar"></a></td>-->
					<td width="0%">&nbsp; </td>
				</tr>
			</table>
		</div>
		<!-- Content -->
		<div id="content_area">
			<br>
			<!--prueba-->


		</div>
		<!-- Footer -->
		<div id="footer">
			<table border="0" cellpadding="15px" align="center" ;
				style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
				<tr>
					<td>
						&copy; 2021 All Rights Reserved.</a>
					</td>
				</tr>
			</table>
		</div>

		<!--<div id="popup-box1" class="popup-position">
			<div id="popup-wrapper">
				<div id="popup-container">
					<div id="popup-head-color3">
						<p
							style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;">
							<a href="javascript:void(0)" onclick="toggle_visibility('popup-box1')">
								<font color="#FFF"> X </font>
							</a></p>
						<p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;">
							Formulario Iniciar Sesión </p>
					</div>
					<br><br><br><br>

					<form action="login_process.php" method="POST">
						<table border="0" align="center">
							<tr>
								<td>Nombre de Usuario:</td>
								<td align="center"><input type="text" id="txtbox" name="username" placeholder="Usuario"
										required><br></td>
							</tr>

							<tr>
								<td>Contraseña:</td>
								<td align="center"><input type="password" id="txtbox" name="password"
										placeholder="contraseña" required><br></td>
							</tr>

							<tr>
								<td> &nbsp; </td>
							</tr>

							<tr>
								<td> &nbsp; </td>
								<td align="left"><input type="SUBMIT" id="btnnav" value="Iniciar Sesión"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>-->


	<!--	<div id="main-wrapper">
			<div class="unix-login">
				<div class="container-fluid" style="background-image: url('assets/myimages/background.jpg')no no-repeat center top;
 background-color:FFF ;background-size:cover">
					<div class="row">
						<div class="col-lg-4 ml-auto">
							<div class="login-content">
								<div class="login-form">
									<center><img src="./assets/uploadImage/Logo/logo.png" style="width: 100%;"></center>
									<br>
-->
									<div class="login-box">
									<img class="avatar" src="images/login.png" alt ="Logo">
									<form action="login_process.php" method="POST">
										<div class="form-group">

											<input type="text" id="txtbox" name="username" placeholder="Usuario"
												required>

										</div>
										<div class="form-group">
											<input type="password" id="txtbox" name="password" placeholder="contraseña"
												required>
										</div>


										<input type="SUBMIT" id="btnnav" value="Iniciar Sesión">
									</form>
									</div>
<!--								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
-->

	</div>

</body>

</html>